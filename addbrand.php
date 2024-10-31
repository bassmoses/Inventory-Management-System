<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add NEW Brand Form</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
include_once'navheader.php';
?>
<form class="form" action="brand.php" method="POST">
    <p>
        <label for="brand_name">Brand Name:</label>
        <input type="text" name="brand_name" id="brand_name" placeholder="Brand name">
    </p>
    <p>
        <label for="available">Status:</label>
        <input type="text" name="available" id="available" placeholder="Status">
    </p>

    <input type="submit" value="Submit">
    
</form>
</body>
</html>
