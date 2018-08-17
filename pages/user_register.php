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

<!-- Logic for saving User -->

<?php
if (isset($_POST['save_user'])) {
    $user = new User();
    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];
    $user->email = $_POST['email'];
    $user->cost_center = $_POST['cost_center'];
    $user->department = $_POST['department'];
    $user->area = $_POST['area'];
    $user->account_type = $_POST['account_type'];
    $user->title = $_POST['title'];

    $user->create();

    echo '<div class="uk-alert uk-alert-success uk-text-center"> User Created Successfully </div>';

    ###########################
    ### Calling mailGun API ###
    ###########################

# Include the Autoloader
    require '../vendor/autoload.php';

# Instantiate the client with option to disable ssl verfication.
    $client = new \GuzzleHttp\Client([
        'verify' => false,
    ]);

# pass the client to Guzzle Adapter
    $adapter = new \Http\Adapter\Guzzle6\Client($client);

# pass the Adapter to mailgun object
    $mailgun = new \Mailgun\Mailgun($secretkey, $adapter);

# Make the call to the client.

    $Option['TO_MAIL'] = $user->email;
    $Option['TO_NAME'] = $user->title . " " . $user->first_name . " " . $user->last_name;

    $result = $mailgun->sendMessage($domain, array(
        'from' => $Option['FROM_NAME'] . " <" . $Option['FROM_MAIL'] . ">",
        'to' => $Option['TO_NAME'] . " <" . $Option['TO_MAIL'] . ">",
        'subject' => $Option['SUBJECT'],
        'text' => $Option['BODY_TEXT'],
        'html' => $Option['BODY_HTML'],
    ));

} else if (!empty(mysqli_error($database->connection))) {
    echo '<div class="uk-alert uk-alert-danger uk-text-center"> User Creation Failed </div>';
}

?>

<!-- Body Content (User Register Form) -->
<?php include "../includes/content_add_user.php"?>


<!-- Footer -->
<?php include "../includes/footer.php"?>
<script>
$(document).ready(function(){
    $("form[name='save_user']").click(function(){
        $("form[name='user_form_1']").submit();
        $("form[name='user_form_2']").submit();
        $("form[name='user_form_3']").submit();
    });
});

</script>