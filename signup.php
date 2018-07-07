<?php
require "includes/common.php";
if (isset($_SESSION['email'])) 
    { 
    header('location: home.php'); 
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
         <link href="css/style.css" rel="stylesheet" type="text/css"/> 
        <title>Signup</title>
    </head>
    <body>
         <?php
        include 'includes/header.php';
        ?>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row row_style">
                <div class="col-sm-6">
                 <img src="img/signup.png" alt="About Us" class="img-responsive">
                </div>
                             <div class="col-sm-5">
                                 <h2>SIGN UP</b></h2>
                                  <?php if(isset($_GET['signup_error'])){
                                    ?><center><p class="text-danger">
                                    <?php echo $_GET['signup_error'];}
                                    ?>
                                    </p></center>
                                    <?php if(isset($_GET['signup_success'])){
                                    ?><center><p class="text-success">
                                    <?php echo $_GET['signup_success'];}
                                    ?>
                                    </p></center>
                        <form method="POST" action="signup_script.php">
                            <div class="form-group">
                                <input type= "text" class="form-control" placeholder="Name" name="name"  required >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required pattern="[0-9]{10}">
                            </div>
                            <div class="form-group">
                                <input type= "text" class="form-control"  placeholder="City" name="city" required >
                            </div>
                            <div class="form-group">
                                <input type= "text" class="form-control"  placeholder="Address" name="address" required >
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Submit</button>
                        </form>
                    </div>
                </div>
        </div>
        <br>
                  <?php
        include 'includes/footer.php';
         ?>
    </body>
</html>
