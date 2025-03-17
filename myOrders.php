<?php

    session_start();

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
    <title>Order History</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/header-logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>
<body style="background-color:rgb(240, 240, 240);">
<nav>
        <a class="logo" href="index.php"><img src="assets/logo.jpg"/></a>
        <ul class="nav-links">
            <li><a href="index.php" style="text-decoration: underline;">Home</a></li>
            <li><a href="petPortrait.php">Pet Portraits</a></li>
            <li><a href="prints.php">Prints</a></li>
            <li><a href="greetingCards.php">Greetings Cards</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="right-nav">
        <?php 
                    if(isset($_SESSION["userid"]))
                    {
                        $userID = $_SESSION['userid'];
                        $username = $_SESSION['user_username'];
                        $first_letter = substr($username, 0, 1)
                        
                ?> 
            <a href="account.php" class="account-icon" style="text-transform: uppercase; color: black; font-weight: 600;"><p><?php echo $first_letter?></p></a>
            <a href="basket.php" class="nav-btn-no-style"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg></a>
            <form class="" action="logout.php" method="post" style="display:inline-flex; display: contents;">
                <a href="includes/logout.inc.php" class="nav-btn">Sign Out</a>
            </form>
            <i class="fa fa-bars" id="ham-menu"></i>
            <?php
                    }
                    else
                    {
                ?>
                   <a href="login.php" class="nav-btn">Sign In</a>
                   <i class="fa fa-bars" id="ham-menu"></i>
                <?php
                    }
                ?>
        </div>
    </nav>
    <!-- cover image-->
    <div class="coverImage">
        <div class="darkness"></div><!--To add a black cover over image -->
        <p class="cover-image-header">Order History</p>
        <img class="img" style="background-size: cover;" src="assets/coverFinal.jpg" alt="Cover image" />
    </div>
    <div class="order-content">
        <div class="row-order">
            <?php
            include('classes/getOrders.classes.php');
            $_SESSION['orderid'] = 0; 
            include_once('classes/getSelectedOrder.classes.php'); 
            $getItems = new GetSelectedOrder();
            if (isset($orders) && $orders) {
            foreach ($orders as $row) {
                $orderid = $row['order_ID']; //get the order id of the current order
                $orderItems = $getItems->fetchOrderItems($orderid); ?> <!--this gets the items in the order -->
                <div class="column-order">
                    <div class="order-top-box">
                        <p style="color: black; margin:0;"><strong></strong><?php echo htmlspecialchars($row['order_Status']);?></p>
                        <p style="color: black; margin:0;"><strong></strong><?php echo htmlspecialchars($row['order_Date']);?></p>
                    </div>
                    <div class="order-image">
                        <?php 
                        if (isset($orderItems) && $orderItems) {
                            $firstItem = reset($orderItems);?> <!--This gets the first item in the order -->
                            <img style="" src="/assets/products/<?php echo htmlspecialchars($firstItem['print_Image']);?>" alt=""><!--First item image is displayed on order -->
                            <?php }?>

                    </div>
                    <div class="order-details">
                        <p style="color: black; margin:0;">Order #<?php echo htmlspecialchars($row['order_ID']);?></p>
                        <p style="color: black;">£<?php echo htmlspecialchars($row['order_total']);?></p>
                        <form action="mySelectedOrder.php" method="post" style="display:inline-flex; display: contents;">
                            <input type="hidden" name="order_Id" value="<?php echo $row['order_ID'];?>">
                            <input type="hidden" name="address-line1" value="<?php echo $row['order_address1'];?>">
                            <input type="hidden" name="address-line2" value="<?php echo $row['order_address2'];?>">
                            <input type="hidden" name="town" value="<?php echo $row['town'];?>">
                            <input type="hidden" name="postcode" value="<?php echo $row['postcode'];?>">
                            <input type="hidden" name="order_Status" value="<?php echo $row['order_Status'];?>">
                            <input type="hidden" name="order_Date" value="<?php echo $row['order_Date'];?>">
                            <input type="hidden" name="order_Total" value="<?php echo $row['order_total'];?>">
                            <input type="hidden" name="order_Discount" value="<?php echo $row['order_Discount'];?>">
                            <button class="orderButton" type="submit" name="selectOrder">View Order</button>
                        </form>
                    </div>
                </div>
                    
            
            <?php } }?>
            <?php if (empty($orders)){
                ?>
                <div class="basketEmpty" style="text-align:center;margin:  auto; margin-top: 20%; margin-bottom: 20%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #769164;"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                    <h5>You've got no orders.</h5>
                </div>
            <?php } ?>
        </div>
    </div>




    
    


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

<script src="/jscomponents/navigation.js"></script>
<script type = "text/javascript" src="/jscomponents/scrollreveal.js"></script>
</body>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
