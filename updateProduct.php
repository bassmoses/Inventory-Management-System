<?php include "db.php";
 include_once'navheader.php'; 
$con = mysqli_connect("localhost","root","","ims");
if(isset($_POST['update'])){
  $name       = $_POST['product_name'];


  $id         = $_POST['pid'];
  $query      = mysqli_query($con, "UPDATE products SET product_name = '$name'  WHERE pid = '$id'");
  if ($query) {
    header("location:manage_product.php");
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
 <title>update</title>
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
  <?php $query = mysqli_query($con, "SELECT product_name FROM products WHERE pid = '$id' ");
  $r = mysqli_fetch_array($query);
  $name = $r['product_name'];
 
   ?>
    <form method="POST" action="updateProduct.php">
        <div class="form-group">
        <label>Product Name</label>
          <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name..." required="" value="<?php echo $name; ?>">
        </div><!-- form-group -->
        

        <input type="hidden" name="pid" value="<?php echo $id; ?>">
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