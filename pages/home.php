<!-- Header -->
<?php
ob_start();
include "../includes/header.php";
$buffer = ob_get_contents();
ob_end_clean();

$buffer = str_replace("%TITLE%", "Home", $buffer);
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

$buffer = str_replace("%SUB-HEADING%", "Home", $buffer);
$buffer = str_replace("%SLIDER-CONTENT%", "Welcome to the Bidding Web Application. One stop shop for your all Supplying items needs", $buffer);
echo $buffer;

?>


<!-- Footer -->
<?php include "../includes/footer.php"?>