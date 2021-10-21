<?php
session_start();
include('db.php');
if (empty($_POST['full_name'])  && empty($_POST['email'])  && empty($_POST['dob']) && empty($_POST['your_self'])  && empty($_POST['captcha_input'])) {
    echo 'empty';
    // die;
}
// if not empty then execute below code
if (!empty($_POST['full_name'])  && !empty($_POST['email'])  && !empty($_POST['dob']) && !empty($_POST['your_self'])  && !empty($_POST['captcha_input'])) {
    $full_name = $_POST['full_name'];
    $_SESSION['full_name'] = $full_name;
    $email = $_POST['email'];
    $_SESSION['email_validate'] = $email;
    $dob = $_POST['dob'];
    $_SESSION['dob'] = $dob;
    $your_self = $_POST['your_self'];
    $captcha_input = $_POST['captcha_input'];
    if ($_SESSION['captctha'] == $captcha_input) {
        // print_r($_POST);
        // die;
        $query = "INSERT INTO `aelum_details` ( `full_name` , `email` , `dob` , `your_self`) VALUES ('{$full_name}' , '{$email}' , '{$dob}' , '{$your_self}') ";
        $result = mysqli_query($con, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>
