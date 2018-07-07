<?php
require "includes/common.php";
$name = $_POST['name'];
$email = $_POST['email'];
include_once('C:/wamp/www/Project/htmlpurifier-4.10.0/library/HTMLPurifier.auto.php');
$purifier = new HTMLPurifier();
$name = $purifier->purify($name);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
header('location: signup.php?signup_error=Invalid Email ID!');
}
$password = $_POST['password'];
$contact = $_POST['contact'];
$regex_contact = "[0-9]{10}";
if (!preg_match($regex_contact, $contact)) {
header('location: signup.php?signup_error=Invalid Contact No.!');
}
$password = $purifier->purify($password);
$contact= $purifier->purify($contact);
$city = $_POST['city'];
$address = $_POST['address'];
$city = $purifier->purify($city);
$address = $purifier->purify($address);
$name = mysqli_real_escape_string($con, $name);
$password = mysqli_real_escape_string($con, $password);
$contact = mysqli_real_escape_string($con, $contact);
$city = mysqli_real_escape_string($con, $city);
$address = mysqli_real_escape_string($con, $address);
$password=MD5($password);
$select_query = "select id from users where email='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)>0)
{
header('location: signup.php?signup_error=Email Id already registered!');
}
 else 
{
$insert_query = "insert into users(name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city','$address')";
$insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
header('location: signup.php?signup_success=Account Successfully Created.');
$_SESSION['id'] = mysqli_insert_id($con);
$_SESSION['email'] = $email;
header('location: home.php'); 
}
?>