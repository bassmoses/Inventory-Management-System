<?php 
include 'db.php';
if(isset($_GET['delete_id'])){
 $id = $_GET['delete_id'];
 $query = mysqli_query($con, "DELETE FROM orders WHERE id = '$id'");
 if($query){
  header("location:viewOrder.php");
 }else{
  echo "<script>alert('Sorry delete query not work!')</script>";
 }
}

 ?>