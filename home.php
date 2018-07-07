<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) 
    { 
    header('location: index.php'); 
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
         <link href="css/index.css" rel="stylesheet" type="text/css"/> 
        <title>E- Store</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
         <?php
        include 'includes/Check-if-added.php';
        ?>
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          #1
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile1.png" alt="Mobile 1" class="img-responsive">
                            <p>
                                4.2" Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs. 5000.
                            </p>
<?php 
                                 if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="index.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
 <?php } else {
     //We have created a function to check whether this particular product is added to cart or not.
     if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
       
     } else { 
         ?> 
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
                                 
     } 
     
     }
     ?>                           
                     </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          #2
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile2.png" alt="Mobile 2" class="img-responsive">
                            <p>
                                Numeric keypad, 2 MP Camera, Internet browsing, Rs. 4000.
                               
                            </p> <br>
<?php 
                                 if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="index.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
 <?php } else {
     //We have created a function to check whether this particular product is added to cart or not.
     if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
       
     } else { 
         ?> 
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
                                 
     } 
     
     }
     ?>                            
                     </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          #3
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile3.png" alt="Mobile 3" class="img-responsive">
                            <p>
                                4" Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB Internal memory, Rs. 4000
                            </p>
<?php 
                                 if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="index.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
 <?php } else {
     //We have created a function to check whether this particular product is added to cart or not.
     if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
       
     } else { 
         ?> 
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
                                 
     } 
     
     }
     ?>                            
                     </div>
                         </div>
                     </div>
                 </div>
        <div class="row">
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          #4
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile4.png" alt="Mobile 4" class="img-responsive">
                            <p>
                                3.5" Screen, Apple A4 processor, 512MB RAM, 8GB Internal memory, Rs. 4500.
                            </p>
<?php 
                                 if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="index.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
 <?php } else {
     //We have created a function to check whether this particular product is added to cart or not.
     if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
       
     } else { 
         ?> 
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
                                 
     } 
     
     }
     ?>                            
                     </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          #5
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile5.png" alt="Mobile 5" class="img-responsive">
                            <p>
                                Numeric keypad, 1.3 MP Camera, Internet browsing, Rs. 3500.        
                            </p>
                   
<?php 
                                 if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="index.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
 <?php } else {
     //We have created a function to check whether this particular product is added to cart or not.
     if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
       
     } else { 
         ?> 
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
                                 
     } 
     
     }
     ?>                            
                     </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          #6
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile6.png" alt="Mobile 6" class="img-responsive">
                            <p>
                                4" Screen, mediatek processor, Android 2.3.6, 512MB RAM, 2GB Internal memory, Rs. 3000
                            </p>
<?php 
                                 if (!isset($_SESSION['email'])) { ?>
                                 <p><a href="index.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
 <?php } else {
     //We have created a function to check whether this particular product is added to cart or not.
     if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
       
     } else { 
         ?> 
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
                                 
     } 
     
     }
     ?>                            
                     </div>
                         </div>
                     </div>
                 </div>
    </div>
         
        </body>
</html>