<?php

use Stripe\Terminal\Location;

    session_start();

    if(isset($_SESSION['userid'])){
      header(("Location: index.php"));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" class="">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e89f7f9e54.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/header-logo.png" />

</head>
<body>
    <form action="includes/login.inc.php" method="post" style="max-width: 50vw; margin:auto;" class="basic">
        <div class="index-login-signup">
            <img class="login-logo" src="assets/logo-white.jpg" style="max-width: 80px;"/>
            <h2>Login</h2>
            <hr>
            <label for="username"><b>Username/Email</b></label>
            <input type="text" name="username" placeholder="Username/Email">
            <label for="pwd"><b>Password</b></label>
            <input type="password" name="pwd" placeholder="Password">
            <p style="color:red" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error'];}?></p>
            <button class="register-button" type="submit" name="submit">Login</button>
            <a href="register.php"><p style="text-align:center; text-decoration: none;">Dont have an account yet? Sign up here!</p></a>
        </div>
    </form>

</body>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topNavigation") {
    x.className += " responsive";
  } else {
    x.className = "topNavigation";
  }
}
</script>