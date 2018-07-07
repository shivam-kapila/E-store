<?php
require "includes/common.php";
if (isset($_SESSION['email'])) 
    { 
    header('location: home.php'); 
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/forgot.css" rel="stylesheet" type="text/css"/> 
        <title>Forgot Password</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        
        ?>
        
        <br>
        <br>
        <br>
        <br>
          <center><p class="text-danger">
              Sorry this service is currently unavailable.</p></center>
  
         <?php
        include 'includes/footer.php';
         ?>
            
        </body>
</html>