<?php
require "includes/common.php";
include_once('C:/wamp/www/Project/htmlpurifier-4.10.0/library/HTMLPurifier.auto.php');
$purifier = new HTMLPurifier();
$email = $_POST['email'];
$password = $_POST['password'];
$email = $purifier->purify($email);
$password = $purifier->purify($password);
$password=MD5($password);
$select_query = "select id, email from users where email='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)==0)
{
header('location: index.php?login_error=Invalid Email ID!');
}
 else 
{
$select_query1 = "select id, email from users where email='$email' and password='$password'";
$select_query1_result = mysqli_query($con, $select_query1) or die(mysqli_error($con));
if(mysqli_num_rows($select_query1_result)==1)
{
$row = mysqli_fetch_array($select_query_result);
$_SESSION['id']=$row['id'];
$_SESSION['email']=$row['email']; 
header('location: home.php'); 
}
 else {
  header('location: index.php?login_error=Incorrect Password!');
 }
}
?>