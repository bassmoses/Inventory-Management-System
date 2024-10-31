<?php 
include 'db.php';
if(isset($_GET['delete_id'])){
 $id = $_GET['delete_id'];
 $query = mysqli_query($con, "DELETE FROM products WHERE pid = '$id'");
 if($query){
  header("location:manage_product.php");
 }else{
  echo "<script>alert('Sorry delete query not work!')</script>";
 }
}

 ?>