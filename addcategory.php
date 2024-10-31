
<?php 

include_once'db.php';

$con = mysqli_connect("localhost","root","","ims");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_REQUEST['catname'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['catname']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
   
// Attempt insert query execution
$sql = "INSERT INTO category (catname) VALUES ('$username')";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}
// Close connection
mysqli_close($con);
?>