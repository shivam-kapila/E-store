<?php
include_once('C:/wamp/www/Project/htmlpurifier-4.10.0/library/HTMLPurifier.auto.php');
$purifier = new HTMLPurifier();
$item_id=$_GET['id'];
$item_id = $purifier->purify($item_id);
require "includes/common.php";
$user_id=$_SESSION['id'];
$insert_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
header('location: home.php'); 
?>
