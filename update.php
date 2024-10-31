<?php include "db.php";
 include_once'navheader.php'; 
$con = mysqli_connect("localhost","root","","ims");
if(isset($_POST['update'])){
  $name       = $_POST['username'];
  $item      = $_POST['item_name'];
 $quantity = $_POST['quantity'];
$amount     = $_POST['amount_paid'];

  $payment_type= $_POST['payment_type'];
 $date = $_POST['date_time'];

  $id         = $_POST['id'];
  $query      = mysqli_query($con, "UPDATE orders SET username = '$name' ,item_name = '$item', quantity = '$quantity', amount_paid = '$amount', payment_type = '$payment_type', date_time = '$date' WHERE id = '$id'");
  if ($query) {
    header("location:viewOrder.php");
  }else{
    echo "<script>alert('Sorry update query not work')</script>";
  }
}

 ?>
  <?php
    include_once'navheader.php';
    $con = mysqli_connect("localhost","root","","ims");
        require('db.php');



        // mysql select query
    
        
$query1 = "SELECT * FROM `products`";

// for method 1

$result1 = mysqli_query($con, $query1);

// for method 2

$result2 = mysqli_query($con, $query1);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
        


?>
<!DOCTYPE html>
<html>
<head>
 <title>PHP Crud Using Mysqli</title>
 <link rel="stylesheet" href="style.css"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 70px;">
 <div class="row justify-content-center">
  <div class="col-md-10 text-center">
   <?php

  if(isset($_GET['update_id'])): ?>
  <?php $id = $_GET['update_id']; ?>
  <?php $query = mysqli_query($con, "SELECT * FROM orders WHERE id = '$id' ");
  $r = mysqli_fetch_array($query);
  $name = $r['username'];
  $item = $r['item_name'];
  $quantity = $r['quantity'];
  $amount = $r['amount_paid'];
  $payment_type= $r['payment_type'];
  $date= $r['date_time'];
   ?>
    <form method="POST" action="update.php">
        <div class="form-group">
        <label>Name</label>
          <input type="text" name="username" class="form-control" placeholder="Enter Name..." required="" value="<?php echo $name; ?>">
        </div><!-- form-group -->
        <div class="form-group">
        <label>Item Name</label>
        
        <select class="login-input" name="item_name">
                    <?php echo $options;?>
            </select>

        </div><!-- form-group -->
        <div class="form-group">
        <label>Quantity</label>
          <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity..." required="" value="<?php echo $quantity; ?>">
        </div><!-- form-group -->
        <div class="form-group">
        <label>amount</label>
          <input type="text" name="amount_paid" class="form-control" placeholder="Enter amount..." required="" value="<?php echo $amount; ?>">
        </div><!-- form-group -->

        <div class="form-group">
        <label>Payment Type</label>
        <select name="payment_type"  class="login-input" id="payment_type" required/>
                          <option>Cash</option>
                          <option>Card</option>
                          <option>Draft</option>
                          <option>Cheque</option>
                        </select>
        </div><!-- form-group -->

        <div class="form-group">
        <label>Enter Correct Date and Time(yyyy/mm/dd Hr:Min:Sec)</label>
          <input type="text" name="date" class="form-control" placeholder="Enter the correct date..." required="" value="<?php echo $date; ?>">
        </div><!-- form-group -->

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
          <input type="submit" name="update" class="btn btn-info" value="Update">
        </div><!-- form-group -->
       </form><!-- form -->
<?php endif; ?>



  </div><!-- col -->
 </div><!-- row -->
</div><!-- container -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>