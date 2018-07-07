<?php
require "includes/common.php";
$email=$_SESSION['email'];
if (!isset($_SESSION['email'])) 
    { 
    header('location: index.php'); 
    }
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$re_type_new_password =$_POST['re_type_new_password'];
include_once('C:/wamp/www/Project/htmlpurifier-4.10.0/library/HTMLPurifier.auto.php');
$purifier = new HTMLPurifier();
$old_password = $purifier->purify($old_password);
$new_password = $purifier->purify($new_password);
$re_type_new_password = $purifier->purify($re_type_new_password);
$old_password = MD5($old_password);
$new_password = MD5($new_password);
$re_type_new_password = MD5($re_type_new_password);
if($new_password!=$re_type_new_password)
{
    header('location: settings.php?password_error=Passwords do not match.');
}
 else 
{
$select_query = "select password from users where email='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
$pass=$row['password'];
if($pass==$old_password)
{
$update_query = "update users set password ='$new_password'  where email='$email'";
$update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
header('location: settings.php?password_success=Password updated successfully.');

}
else
    {
header('location: settings.php?password_error=Wrong old password.');
}
}
?>