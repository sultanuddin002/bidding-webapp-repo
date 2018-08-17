<?php

// Database Connection constants

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'bidding_webapp_db');


###########################
####### init Config #######
###########################

#api key and domain (from mailgun.com panel)
$secretkey='f0b27118f2ca120ad12b5fb2a8a97dc9-6b60e603-7135639b';
//source domain (you can add your own domain at mailgun panel and use it)
$domain = "sandboxff90186b87c6476189d18126ac13ad3c.mailgun.org";

# email options 
$Option['FROM_MAIL']="postmaster@sandboxff90186b87c6476189d18126ac13ad3c.mailgun.org";
$Option['FROM_NAME']="MyMailGun";//any name you want it to appear
$Option['TO_MAIL']="sultanuddin002@gmail.com";
$Option['TO_NAME']="Ibraheem";
$Option['SUBJECT']="Welcome to Bidding Web App";
$Option['BODY_TEXT']="You have been successfully registered to our database";// if html is not supported then use text message instead
$Option['BODY_HTML']="<b style='color:red'>Thank you</b>";
