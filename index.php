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
         <link href="css/index.css" rel="stylesheet" type="text/css"/> 
        <title>E- Store</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        
        ?>
        
        <br>
        <br>
        <br>
        <br>
        <?php if(isset($_GET['login_error'])){
           ?><center><p class="text-danger">
       <?php echo $_GET['login_error'];}
            ?>
        <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          Mobile 1
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile1.png" alt="Mobile 1" class="img-responsive">
                            <p>
                                4.2" Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs. 5000.
                            </p>
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                           
                     </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          Mobile 2
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile2.png" alt="Mobile 2" class="img-responsive">
                            <p>
                                Numeric keypad, 2 MP Camera, Internet browsing, Rs. 4000.
                               
                            </p> <br>
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                           
                     </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          Mobile 3
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile3.png" alt="Mobile 3" class="img-responsive">
                            <p>
                                4" Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB Internal memory, Rs. 4000
                            </p>
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                           
                     </div>
                         </div>
                     </div>
                 </div>
        <div class="row">
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          Mobile 4
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile4.png" alt="Mobile 4" class="img-responsive">
                            <p>
                                3.5" Screen, Apple A4 processor, 512MB RAM, 8GB Internal memory, Rs. 4500.
                            </p>
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                           
                     </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          Mobile 5
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile5.png" alt="Mobile 5" class="img-responsive">
                            <p>
                                Numeric keypad, 1.3 MP Camera, Internet browsing, Rs. 3500.        
                            </p>
                   
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                           
                     </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                          Mobile 6
                        </div>
                        <div class="panel-body">
                            <img src="img/mobile6.png" alt="Mobile 6" class="img-responsive">
                            <p>
                                4" Screen, mediatek processor, Android 2.3.6, 512MB RAM, 2GB Internal memory, Rs. 3000
                            </p>
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                           
                     </div>
                         </div>
                     </div>
                 </div>
    </div>
         <?php
        include 'includes/footer.php';
         ?>
            
        </body>
</html>