<?php
require_once "config.php";

class Database
{

    public $connection;

    public function __construct()
    {
        $this->open_db_connection();
    }

    // Database Connection Open
    public function open_db_connection()
    {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->connection->connect_errno) {
            die("Database connection failed" . mysqli_error());
        }
    }

    // SQL query Function
    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }

    // SQL string escape special character for security
    public function escape_string($string)
    {
        $escape_string = mysqli_real_escape_string($this->connection, $string);
        return $escape_string;
    }

    public function the_insert_id()
    {

        return mysqli_insert_id($this->connection);
    }

}

$database = new Database();

// echo '<pre>';
// print_r($database);
// echo '</pre>';

// $the_result_array = $database->query("SELECT * FROM users WHERE user_id=1 LIMIT 1");
// echo '<pre>';
// print_r($the_result_array);
// echo '</pre>';
