<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add NEW PRODUCT Form</title>
<link rel="stylesheet" href="style.css"/>

</head>
<body>
<?php include_once'navheader.php'; ?>
<form class="form" action="products.php" method="POST">
    
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name">
    
<a herf="dashboard.php">
    <input type="submit" value="Submit">
    </a>
</form>
</body>
</html>
