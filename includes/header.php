<div class="navbar navbar-default navbar-fixed-top"> 
    <div class="container"> 
        <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> </button> 
                <a class="navbar-brand" href="index.php">
                   E- Store
                </a> 
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right"> 
                <?php if (isset($_SESSION['email'])) { 
                    ?> 
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a</li> 
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
             
                    <?php
                    
                } else 
                    { 
                    ?> 
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
                <li><a href="#login" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li> 
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li> 
<?php       
                } 
                ?> 
            </ul>
        </div> 
    </div> 
</div>
<div class="modal" id="login">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
          <div ><h4>LOGIN
                  <button type="button" class="close" data-dismiss="modal">&times;</button><h4>
          </div></div>

      <div class="modal-body">
     
           </p></center>
           
                     
          <div >Don't have an account? <a href="signup.php">Register</a></div><br>
                            <form action="login_submit.php" method="POST" >
                      <div class="form-group">
                               <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required >
                            </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form>
                           
      </div>

      <div>
        <div > <a href="forgot.php" >Forgot password?</a></div>
      </div>

    </div>
  </div>
  </div>
</div>

