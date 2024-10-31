<!DOCTYPE html>
<!-- Created By CodingNepal -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Navbar</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">IMS</label>
      <ul>
        <li><a class="active" href="dashboard.php">Home</a></li>
        <li><a href="viewOrder.php">View Orders</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </body>
</html>
