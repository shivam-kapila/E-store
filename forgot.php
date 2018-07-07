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
       <?php if(isset($_GET['forgot_error'])){
           ?><center><p class="text-danger">
       <?php echo $_GET['forgot_error'];}
            ?>
           </p></center>
           <?php if(isset($_GET['forgot_success'])){
            ?><center><p class="text-success">
            <?php echo $_GET['forgot_success'];}
            ?>
            </p></center>
        <div class="container">
            <div class="row row_style">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h4>FORGOT PASSWORD</h4><br>
                            <form action="forgot_error.php" method="POST" >
                        <div class="form-group">
                            <label for="email">Enter your Email ID</label>
                            <input type="email"  class="form-control" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
         ?>
          
    </body>
</html>
