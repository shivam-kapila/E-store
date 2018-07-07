<?php
require "includes/common.php";
include_once('C:/wamp/www/Project/htmlpurifier-4.10.0/library/HTMLPurifier.auto.php');
$purifier = new HTMLPurifier();
$name = $_POST['name'];
$email = $_POST['email'];
$name = $purifier->purify($name);
$email = $purifier->purify($email);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
header('location: contact.php?contact_error=Invalid Email ID!');
}
$message = $_POST['message'];
$message = $purifier->purify($message);
$name = mysqli_real_escape_string($con, $name);
$message = mysqli_real_escape_string($con, $message);
$insert_query = "insert into contact(name, email, message) values ('$name', '$email', '$message')";
$insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
header('location: contact.php?contact_success=Query Successfully Registered.');
?>