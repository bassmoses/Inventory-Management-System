<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
include_once'db.php';
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    //*****************000 */
    


//********************************** */
    if (isset($_POST['full_name'])) {
        $username = stripslashes($_REQUEST['full_name']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['user_password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE full_name='$username'
                     AND user_password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['full_name'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
            
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login To IMS(Inventory Management System)</h1>
        <input type="text" class="login-input" name="full_name" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="user_password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>