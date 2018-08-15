<!-- Header -->
<?php 
ob_start();
include "../includes/header.php";
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%","Register User", $buffer);
echo $buffer;
 ?>



<!-- Navigation Menu -->
<?php include "../includes/navigation.php" ?>


<!-- Slider -->
<?php 
ob_start();
include "../includes/slider.php" ;
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%SUB-HEADING%","Register User", $buffer);
$buffer = str_replace("%SLIDER-CONTENT%","Please register yourself to become a part of threlling community in order to bid and take part on this application", $buffer);
echo $buffer;


?>


<!-- Body Content (User Register Form) -->
<?php  include "../includes/content_add_user.php" ?>




<!-- Footer -->
<?php include "../includes/footer.php" ?>