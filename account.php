<?php

    session_start();

    if(!isset($_SESSION["userid"])){
        header('Location: index.php');
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
    <script type = "text/javascript" src="/jscomponents/scrollreveal.js"></script>
    <title>Basket</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/header-logo.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body style="background-color:rgb(240, 240, 240);">
    <?php include('components/navigation.php');?> <!--Get navbar  -->

    <!-- cover image-->
    <div class="coverImage">
        <div class="darkness"></div><!--To add a black cover over image -->
        <p class="cover-image-header">My Account</p>
        <img class="img" style="background-size: cover;" src="assets/coverFinal.jpg" alt="Cover image" />
    </div>
    <div class="main-content">
        <div class="row-order">
            <div class="column-account-left">
                <h3>My Account</h3>
                <p>Name: <?php echo $_SESSION['user_username']?></p>
                <p>Email: <?php echo $_SESSION['user_email']?></p>
                <form class="signout-btn" action="logout.php" method="post">
                    <a href="includes/logout.inc.php">Sign Out</a>
                </form>
            </div>
            <div class="column-account-right">
                <h3>My Orders</h3>
                <a href="myOrders.php" class="view-order-btn">View Orders</a>
            </div>
        </div>
    </div>
     
<script type = "text/javascript" src="/jscomponents/activepage.js"></script>
<script type = "text/javascript" src="/jscomponents/search.js"></script>
<script type = "text/javascript" src="/jscomponents/livesearch.js"></script>
<script src="/jscomponents/navigation.js"></script>
<script type = "text/javascript" src="/jscomponents/carousel.js"></script>
</body>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
