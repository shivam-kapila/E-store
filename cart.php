<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) 
    { 
    header('location: index.php'); 
    }
?>
?><html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="css/forgot.css" rel="stylesheet" type="text/css"/> 
        <title>Cart</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
       ?>
        <br>
        <br>
        <br>
        <br>
        <?php
            $user_id =$_SESSION['id'];
           
            $select_query = "SELECT * FROM users_items ui INNER JOIN items i ON i.pid = ui.item_id WHERE ui.user_id ='$user_id' and ui.status='Added to cart'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)==0) {
?>
            <div class="row row_style">
    <center><h4>
            Add items to the cart first!
        </h4>
    </center>
        <?php
} else {
?>  
    <div class="container table-responsive">
    <div class="col-md-6 col-md-offset-3">
                             <table class="table table-hover ">

                <tbody>
                    <tr>
                        <th>Item Number    </th>                         
                        <th>Price </th>
                        <th></th>
                    </tr>
                    
    <?php
    $sum=0;
    $id='';
     $row = mysqli_fetch_array($select_query_result);
    while($row!=NULL)
    {
        $price=$row['price'];
        $id.=$row['item_id'].',';
        $sum=$sum+$price;
            
    ?>
                    <tr>
                        <td><?php echo "{$row['pid']}";?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo "<a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>"?></td>
                        <?php
                        
     $row = mysqli_fetch_array($select_query_result);
     
                        }
        ?>
<tr>
                         <td><b>Total </b></td> 
                         <td><b><?php echo $sum;?> </b></td>
                         <td><a href="success.php?id=<?php echo $id ?>" class="btn btn-primary">Confirm Order</a></td>
                     </tr>						
          </tbody>
              <?php
}?>
      </table> 
             </div>
             </div>
    </div>
        <?php
        include 'includes/footer.php';
         ?>
    </body>
</html>
