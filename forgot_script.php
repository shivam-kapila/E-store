<?php
function generate() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<?php
require "includes/common.php";
$email = $_POST['email'];
include_once('C:/wamp/www/Project/htmlpurifier-4.10.0/library/HTMLPurifier.auto.php');
$purifier = new HTMLPurifier();
$email = $purifier->purify($email);
$select_query = "select id, email from users where email='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)==0)
{
header("location: forgot.php?forgot_error=Invalid Email ID!?");
}
 else 
{
$pass=generate();
header('location: forgot.php?forgot_success=Password has been emailed to your registered Email ID');

}
?>