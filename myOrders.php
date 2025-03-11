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


</head>
<body>
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
                        
                ?> 
            <a href="account.php" class="nav-btn-no-style" style=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg></a>
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
    <div class="main-content">
        <hr>
            <?php include('classes/getOrders.classes.php');
            if (isset($orders) && $orders) {
                foreach ($orders as $row) { ?>
                <div class="order-card">
                    <div class="flex-container-order" style="margin-top: 2%;">
                        <div class="flex-item-left-2" >
                            <ul>
                                <li>
                                    <div>
                                        <p style="color: black; margin:0;"><strong>Order ID: </strong><?php echo htmlspecialchars($row['order_ID']);?></p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p style="color: black; margin:0;"><strong>Order Status: </strong><?php echo htmlspecialchars($row['order_Status']);?></p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p style="color: black; margin:0;"><strong>Order Date: </strong><?php echo htmlspecialchars($row['order_Date']);?></p>
                                    </div>
                                </li>    
                            </ul>
                        </div>
                        <div class="flex-item-right-2" >
                            <ul>
                                <li>
                                    <form action="mySelectedOrder.php" method="post" style="display:inline-flex; display: contents;">
                                        <input type="hidden" name="order_Id" value="<?php echo $row['order_ID'];?>">
                                        <button class="orderButton" type="submit" name="selectOrder">View Order</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="flex-container-order">
                        <div class="flex-item-left-2" >
                            <ul>
                                <li>
                                    <div>
                                        <p style="color: black; margin:0;"><strong>Delivery Address: </strong></p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p style="color: black; margin:0;"><?php echo htmlspecialchars($row['order_address1']);?>, <?php echo htmlspecialchars($row['order_address2']);?>, <?php echo htmlspecialchars($row['town'])?>, <?php echo htmlspecialchars($row['postcode']);?></p>
                                    </div>
                                </li>    
                            </ul>
                        </div>
                        <div class="flex-item-right-2" >
                            <ul>
                                <li>
                                    <div>
                                        <p style="color: black;"><strong>Order Total: </strong>£<?php echo htmlspecialchars($row['order_total']);?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                
                
                <?php } }?>
            <?php if (empty($orders) ) {
            ?> 
            <div class="basketEmpty" style="text-align:center; margin-top: 20vh; margin-bottom: 20vh;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#769164" class="bi bi-bag-fill" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z"/></svg>
                <h5>You've have not got any orders!</h5>

            </div>
            
            <?php
            }
            ?>
            </div>

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
<?php include('components/footer.html')?> <!--Add footer to page-->
</body>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
