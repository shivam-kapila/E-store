<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) 
    { 
    header('location: index.php'); 
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="css/forgot.css" rel="stylesheet" type="text/css"/> 
        <title>Success</title>
    </head>
    <body>
         <?php
        include 'includes/header_success.php';
       ?>
    
        <br>
        <br>
        <br>
        <br>
            <?php
        $id=$_GET['id'];
        $ids=explode(',',$id);
        foreach ($ids as $i) {
$user_id=$_SESSION['id'];

$update_query = "update users_items set status='Confirmed' where user_id='$user_id' and item_id='$i'";
$update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));

}?>
       <div class="container">
            <div class="row row_style">
                             <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
             
            <center><p>
                Thank you for ordering from E-Store. The order shall be delivered to you shortly.
                    </p>
                    <br>
                    <br>
                    <p>
                        Order some more electronic items <a href="home.php">here.</a>
                    </p>
            </center>
        </div>
            </div>
       </div>
              <?php
        include 'includes/footer.php';
         ?>
    </body>
</html>
