<?php 

include_once'db.php';

$con = mysqli_connect("localhost","root","","ims");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_REQUEST['brand_name'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['brand_name']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    // removes backslashes
    $status = stripslashes($_REQUEST['available']);
    //escapes special characters in a string
    $status = mysqli_real_escape_string($con, $status);
   
// Attempt insert query execution
$sql = "INSERT INTO `brand` (`brand id`, `brand_name`, `availabe`) VALUES (NULL, '$username', '$status');";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}
// Close connection
mysqli_close($con);
?>