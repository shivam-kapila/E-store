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
        <title>Settings</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <br>
        <br>
        <br>
        <br>
         <br>
       <?php if(isset($_GET['password_error'])){
           ?><center><p class="text-danger">
       <?php echo $_GET['password_error'];}
            ?>
           </p></center>
            <?php if(isset($_GET['password_success'])){
           ?><center><p class="text-success">
            <?php echo $_GET['password_success'];}
            ?>
           </p></center>
           
        <div class="container">
            <div class="row row_style">
                             <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                                 <h2><b>Change Password</b></h2>
                        <form action='settings_script.php' method='POST'>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="old_password" required >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name="new_password" required >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" name="re_type_new_password" required >
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
        </div>
                  <?php
        include 'includes/footer.php';
         ?>
    </body>
</html>
