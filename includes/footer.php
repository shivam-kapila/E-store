<footer>
    <div class="container"> 
        <div class="row">
                     <div class="col-sm-4">
                         <h4 class="h4">
                             Information
                         </h4>
                <p><a href="about.php" class="footer"> About Us</a></p> 
                <p><a href="contact.php" class="footer"> Contact Us</a></p> 
                     </div>
            <div class="col-sm-4">
                         <h4 class="h4">
                            My Account
                         </h4>
                <?php if (!isset($_SESSION['email'])) { 
                    ?> 
                <p><a href="#login" data-toggle="modal" class="footer"> Login</a></p> 
                <p><a href="signup.php" class="footer"> Signup</a></p> 
                <?php }
              else {
                    ?>
                  <p><a href="logout.php"  class="footer"> Logout</a></p> 
                <?php
                } ?>
                
            </div>
            <div class="col-sm-4">
                         <h4 class="h4">
                             Contact Us
                         </h4>
                <p> Contact: +91-123-000000</p> 
                 </div> 
    </div>
    </div>
</footer>