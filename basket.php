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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>s

</head>
<body>
    <?php include('components/navigation.php');?> <!--Get navbar  -->

    <!-- cover image-->
    <div class="coverImage">
        <div class="darkness"></div><!--To add a black cover over image -->
        <p class="cover-image-header">My Basket</p>
        <img class="img" style="background-size: cover;" src="assets/coverFinal.jpg" alt="Cover image" />
    </div>
    <div class="main-content">
        <div class="flex-container">
            <div class="flex-item-left">
                <h4>My Basket</h4>
                <hr>
                <!--get session for basket -->
                <?php include('classes/getBasketitems.php');
                include('classes/checkStock.classes.php');
                $stockCheckerBasket = new checkStock(); //new class instence of checkStock.
                if (isset($basket) && $basket) {
                    foreach ($basket as $row) { 
                        $print_ID = $row['print_ID'];
                        $quantity = htmlspecialchars($row['quantity']);
                        $printStock = $stockCheckerBasket->getPrintStock($print_ID); //call to getprintstock function in checkstock class
                        if ($quantity > $printStock){
                            $_SESSION['stock_error'] = "Invalid quantity in basket. There are only " . $printStock . " left in stock!";
                        }
                        ?>

                        <div class="basket-left">
                            <div class="basket-image">
                                <img src="/assets/products/<?php echo htmlspecialchars($row['print_Image']);?>" alt="" style="width: 80px; height: 100px;">
                            </div>
                            <div class="basket-item">
                                <p style="font-size: 14px; text-align: start;"><?php echo htmlspecialchars($row['print_Name']);?></p>
                                <p style="font-size: 14px; text-align:start"><span>£</span><?php echo number_format($row['print_Price'] * $row['quantity'],2);?></p>
                                <div class="basket-bottom">
                                    <form method="POST" action="includes/basket-edit.inc.php">
                                        <input type="hidden" name="basket_ID" value="<?php echo $row['basket_ID'];?>"/>
                                        <input type="hidden" name="customer_ID" value="<?php echo $row['user_id']; ?>"/>
                                        <div class="quantity-container">
                                            <input name="quantity" type="number"  style=" width: 40px; height: 20px; font-size: 12px;" value="<?php echo $row['quantity']; ?>" />
                                            <input type="submit" class="basketButtons" value="Edit" name="edit_Quantity"/>
                                        </div>
                                    </form>
                                    <form method="POST" action="includes/basket-remove.inc.php">
                                        <input type = "hidden" name="print_ID" value="<?php echo $row['basket_ID'];?>"/>
                                        <input type="hidden" name="customer_ID" value="<?php echo $row['user_id']; ?>"/>
                                        <div class="quantity-container">
                                            <input type="submit" class="basketButtons" name="remove_Print" value="Remove"/>
                                        </div>
                                    </form>
                                </div>            
                            </div>
                        </div>
                <?php
                        if (isset($_SESSION['stock_error'])) {
                            ?><p style="font-size: 12px; color: red;"><?php echo $_SESSION['stock_error']; ?></p>
                            <?php
                            unset($_SESSION['stock_error']); // Clear the error after displaying
                        }
                        ?>

                <?php } }?>
            <?php if (empty($basket) ) {
            ?> 
            <div class="basketEmpty" style="text-align:center; margin-top: 20vh; margin-bottom: 20vh;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #769164;"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                <h5>You've got an empty basket.</h5>
                
            </div>
            
            <?php
            }
            ?>
            </div>
            <?php if (!empty($basket) ) {
                ?>
            <div class="flex-item-right">
                <h4>Checkout</h4>
                <hr>
                <ul>
                    <li>
                        
                    <?php
                        if (isset($_SESSION['stockError'])) {
                            echo $_SESSION['stockError'];
                            unset($_SESSION['stockError']); // Clear the error after displaying
                        }
                        if (isset($_SESSION['totalCost'])) {
                            ?><h5><?php echo "Basket Total: £" . number_format($_SESSION['totalCost'], 2);?></h5>
                        <?php
                        } else {
                            echo "Total Cost not set.";
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['totalCost2']) &&(isset($_SESSION['discount']))) {
                            ?>
                            <h5><?php echo "Discount Total: £" . number_format($_SESSION['totalCost2'], 2);?></h5>
                            <p style="font-size: .8rem;">(Excluding Delivery)</p>
                            <p><?php echo $_SESSION["discount"]; ?>% off!</p>
                        <?php
                        } else {
                            $_SESSION['totalCost2'] = $_SESSION['totalCost'];
                            ?>
                            <h5><?php echo "Discount Total: £" . number_format($_SESSION['totalCost'], 2);?></h5>
                            <p style="font-size: .8rem;">(Excluding Delivery)</p>
                            <p>No Discount active.</p>
                            <?php
                        }
                        ?>
                    </li>
                    <li>
                        
                    </li>
                    <li>
                        <h5>Promotional Code</h5>
                    </li>
                        <form method="POST" action="includes/basket-promo.inc.php">
                            <input class="promo" name="code" placeholder="CODE">
                            <input type="hidden" name="customer_ID" value="<?php echo $row['user_id']; ?>"/>
                            <input type="submit" class="basketButtons" value="Apply" name="promo"/>
                        </form>
                    </li>
                    <form method="POST" action="checkout.php" class="basic">
                        <li>
                            <h2>Delivery Address</h2>
                            <hr>
                            <label for="addressline1" style="float:left;"><b>Address line 1</b></label>
                            <input class="delivery" style="padding: 7px;" type="text" name="addressline1" placeholder="Address line 1" required>
                            <label for="addressline2" style="float:left;"><b>Address line 2</b></label>
                            <input style="padding: 7px;" type="text" name="addressline2" placeholder="Address line 2">
                            <label for="town" style="float:left;"><b>Town/City</b></label>
                            <input style="padding: 7px;" type="text" name="town" placeholder="Town/City" required>
                            <label for="postcode" style="float:left;"><b>Postcode</b></label>
                            <input style="padding: 7px;" type="text" name="postcode" placeholder="Postcode" required>
                            <input type="hidden" name="order_total" value="<?php $_SESSION['totalCost'];?>">
                            <button class="checkoutButton" type="submit" name="submitorder">Checkout</button>
                        </li>
      
                    </form>
                        
                </ul>
            </div>
            <?php }?>
        </div>
    </div>
    
<script type = "text/javascript" src="/jscomponents/activepage.js"></script>
<script type = "text/javascript" src="/jscomponents/search.js"></script>
<script type = "text/javascript" src="/jscomponents/livesearch.js"></script>
<script src="/jscomponents/navigation.js"></script>
<script type = "text/javascript" src="/jscomponents/carousel.js"></script>

<?php include('components/footer.html')?> <!--Add footer to page-->
</body>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
