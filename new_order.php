<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>New Orders</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>

    <?php 
    include_once'navheader.php';
    session_start();
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





<?php


   

    
 










        // When form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
            // removes backslashes
            $clientName = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $clientName = mysqli_real_escape_string($con, $clientName);
            $itemName    = stripslashes($_REQUEST['item_name']);
            $itemName    = mysqli_real_escape_string($con, $itemName);
            $quantity = stripslashes($_REQUEST['quantity']);
            $quantity = mysqli_real_escape_string($con, $quantity);

            

            $paid = stripslashes($_REQUEST['amount_paid']);
            $paid = mysqli_real_escape_string($con, $paid);

            $paymentType = stripslashes($_REQUEST['payment_type']);
            $paymentType = mysqli_real_escape_string($con, $paymentType);

            $create_datetime = date("Y-m-d H:i:s");
            $query= "INSERT INTO `orders` (`id`, `username`, `item_name`, `quantity`, `amount_paid`, `payment_type`, `date_time`) VALUES (NULL, '$clientName', '$itemName', '$quantity', '$paid ', '$paymentType', '$create_datetime');";

            



            $ClientEmail    = stripslashes($_REQUEST['client_email']);
            $ClientEmail  = mysqli_real_escape_string($con, $ClientEmail);
            $PhoneNo = stripslashes($_REQUEST['client_phone_number']);
            $PhoneNo = mysqli_real_escape_string($con, $PhoneNo);
            $Address = stripslashes($_REQUEST['client_address']);
            $Address = mysqli_real_escape_string($con, $Address);
        
            
        
            
            $query5= "INSERT INTO `client_details` (`id`, `client_email`, `client_phone_number`, `client_address`) VALUES (null, '$ClientEmail', '$PhoneNo', '$Address');";
        
            
          
            $result5   = mysqli_query($con, $query5);

            
            
          
            $result   = mysqli_query($con, $query);
            if($result){
                echo "<script>alert('Your Order has been recorded successfully!')</script>";
               }else{
                echo "<script>alert('Sorry an error occured!')</script>";
               }
        } else {
    ?>
    
        <form class="form" action="" method="post">
            <h1 class="login-title">New Order</h1>
            <label for="payment_type" >Date</label>
            <input type="text" id="order_date"  class="login-input" name="order_date" readonly class="form-control form-control-sm" value="<?php echo date("Y-d-m"); ?>">
            <input type="text" class="login-input" name="username" placeholder="Client Name" required />
            
            <label for="phone_type" >Phone type</label>
            <select class="login-input" name="item_name">
                    <?php echo $options;?>
            </select>
            <input type="number" class="login-input" name="quantity" placeholder="Quantity">

            
            <input type="number" class="login-input" name="amount_paid" placeholder="Amount paid">
            <label for="payment_type" >Payment Method</label>
            <select name="payment_type"  class="login-input" id="payment_type" required/>
                          <option>Cash</option>
                          <option>Card</option>
                          <option>Draft</option>
                          <option>Cheque</option>
                        </select>
                        <h1 class="login-title">CLIENT DETAILS</h1>
            <label for="payment_type" >Date</label>
            <input type="text" id="order_date"  class="login-input" name="order_date" readonly class="form-control form-control-sm" value="<?php echo date("Y-d-m"); ?>">
            <input type="text" class="login-input" name="client_email" placeholder="Client Email" required />
            
            
            <input type="number" class="login-input" name="client_phone_number" placeholder="Phone Number">

            
            <input type="text" class="login-input" name="client_address" placeholder="Client Address">







            
            <input type="submit" name="submit"herf="dashboard.php" value="order" class="login-button">




        </form>
    <?php
        }
    ?>
















        
          



</body>

</html>