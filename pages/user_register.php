<!-- Header -->
<?php
ob_start();
include "../includes/header.php";
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Register User", $buffer);
echo $buffer;
?>



<!-- Navigation Menu -->
<?php include "../includes/navigation.php"?>


<!-- Slider -->
<?php
ob_start();
include "../includes/slider.php";
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%SUB-HEADING%", "Register User", $buffer);
$buffer = str_replace("%SLIDER-CONTENT%", "Please register yourself to become a part of threlling community in order to bid and take part on this application", $buffer);
echo $buffer;

?>


<!-- Body Content (User Register Form) -->
<?php include "../includes/content_add_user.php"?>

<?php

// $users = User::find_all_users();
// foreach($users as $user){
// echo "<pre>";
// print_r($user);
// echo "</pre>";

// }

// echo "<pre>";
// print_r($users);
// echo "</pre>";

// foreach ($users as $user) {

    // echo $user->first_name . "<br>";
// }

$user = new User();
$user->first_name = "Sultan";
$user->last_name = "Shaikh";
$user->email = "example3@gmail.com";
$user->cost_center = "cost center 1";
$user->department = "department 1";
$user->area = "area 2";
$user->account_type = "Admin";
$user->title = "Mr";

$user->create();



?>


<!-- Footer -->
<?php include "../includes/footer.php"?>