<?php 
include 'db.php';
if(isset($_GET['delete_id'])){
 $id = $_GET['delete_id'];
 $query = mysqli_query($con, "DELETE FROM brand WHERE brand id = '$id'");
 if($query){
  header("location:manage_brand.php");
 }else{
  echo "<script>alert('Sorry delete query not work!')</script>";
 }
}

 ?>