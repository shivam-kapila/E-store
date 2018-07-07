<?php
require "includes/common.php";
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
        <link href="css/style.css" rel="stylesheet" type="text/css"/> 
        <title>Contact Us</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <br>
        <br>
        <br>
        <br>
        <?php if(isset($_GET['contact_error'])){
                                    ?><center class="text-danger">
                                    <?php echo $_GET['contact_error'];}
                                    ?>
                                   </center>
                                    <?php if(isset($_GET['contact_success'])){
                                    ?><center class="text-success">
                                    <?php echo $_GET['contact_success'];}
                                    ?> </center>
   
        <div class="container">
            <div class="row">
                <div class="col-xs-9">
                   
                            <h2>
                                LIVE SUPPORT
                            </h2>
                            <h4>
                                24 hours | 7 days a week | 365 days a year Live Technical Support
                            </h4>
                    <p>
                        It is no secret that we aim to look after our customers well, ensuring that the customer is satisfied with our services. Therefore, it is very important to understand who our customers are, their expectations of the service they experience and how that effects future choices and decisions that they might make. We will try our level best that customer's queries are addressed to make sure the customer experience is positive.
                    </p>
                </div>
                         <div class="col-xs-3">
                            <img src="img/contact.png" alt="Customer Service" class="img-responsive">
                             </div>
                </div>
            <div class="row">
                <div class="col-sm-8">
                   
                            <h2>
                                CONTACT US
                            </h2>
                   <form action="contact_script.php" method="POST" >
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text"  class="form-control" id="name" name="name" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email"  class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea name="message" class="form-control" rows="5" id="message">
                            </textarea>   
                        </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                    <br>
                    
                </div>
                         <div class="col-sm-4">
                             <h2>
                                Company Information : 
                             </h2> 
                             <p>
                                 410 Terry Ave, </p>
                             <p>
                                 North Seattle, WA, </p>
                             <p>
                                 USA </p>
                             <p>
                                 Phone: (00) 222 666 444 </p>
                             <p>
                                 Fax: (000) 222 666 444 </p>
                             <p>
                                 Email: info@estore.com </p>
                             <p>
                                 Follow on: Facebook, Twitter
                             </p>
                         </div>
                </div>
        </div> 
    <?php
    include 'includes/footer.php';
    ?>

</body>
</html>