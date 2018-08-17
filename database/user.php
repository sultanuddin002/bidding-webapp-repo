<?php

class User
{

    public static $db_table = "users";
    public static $db_table_fields = array('first_name', 'last_name', 'email', 'cost_center', 'department', 'area', 'account_type', 'title');
    public $user_id;
    public $first_name;
    public $last_name;
    public $email;
    public $cost_center;
    public $department;
    public $area;
    public $account_type;
    public $title;

    public static function find_all_users()
    {

        return self::find_this_query("SELECT * FROM users");
    }

    public static function find_user_by_id($uid)
    {
        $the_result_array = self::find_this_query("SELECT * FROM users WHERE user_id=$uid LIMIT 1");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function find_this_query($sql)
    {
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();

        while ($row = mysqli_fetch_array($result_set)) {
            $the_object_array[] = self::instantiation($row);
        }

        return $the_object_array;
    }

    public static function instantiation($the_record)
    {
        $the_object = new self;

        foreach ($the_record as $the_attribute => $value) {
            if ($the_object->has_the_attribute($the_attribute)) {
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object;
    }

    private function has_the_attribute($the_attribute)
    {
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute, $object_properties);
    }

    // Create New User Method
    public function create()
    {
        global $database;

        $properties = $this->clean_properties();
        
        $sql = "INSERT INTO " . self::$db_table . " (" . implode(",", array_keys($properties)) . ")";
        $sql .= " VALUES ('" . implode("','", array_values($properties)) . "')";

        if ($database->query($sql)) {
            $this->id = $database->the_insert_id();
            return true;
        } else {
            return false;
        }
    } // Create Method

    protected function properties()
    {
        $properties = array();

        foreach (self::$db_table_fields as $db_field) {
            if (property_exists($this, $db_field)) {

                $properties[$db_field] = $this->$db_field;
            }
        }
        return $properties;
    }

    protected function clean_properties()
    {
        global $database;

        $clean_properties = array();

        foreach ($this->properties() as $key => $value) {
            $clean_properties[$key] = $database->escape_string($value);
        }
        return $clean_properties;
    }
}
