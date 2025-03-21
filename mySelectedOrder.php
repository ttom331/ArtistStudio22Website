<?php

    session_start();
    
    if (isset($_POST['selectOrder'])){
        $_SESSION['orderid'] = $_POST['order_Id'];
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
    <title>Order History</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/header-logo.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>
<body style="background-color:rgb(240, 240, 240);">
    <?php include('components/navigation.php');?> <!--Get navbar  -->
    <!-- cover image-->
    <div class="coverImage">
        <div class="darkness"></div><!--To add a black cover over image -->
        <p class="cover-image-header">Order #<?php echo $_SESSION['orderid'] ?></p>
        <img class="img" style="background-size: cover;" src="assets/coverFinal.jpg" alt="Cover image" />
    </div>
    <div class="main-content">

        <div class="row-order">
            <div class="column-order-selected-left">
                <div class="order-top-box-selected">
                    <p style="color: black; margin:0; font-weight: 700;"><?php echo htmlspecialchars($_POST['order_Status']);?></p>
                    <p style="color: black; margin:0;"><?php echo htmlspecialchars($_POST['order_Date']);?></p>
                </div>
                
                <div class="order-top-box">
                    <p style="font-weight: 700;">Contact Information</p>
                    <p>Name: <?php echo $_SESSION['user_username']?></p>
                    <p>Email: <?php echo $_SESSION['user_email']?></p>
                    <p style="font-weight: 700; margin-top: 2%;">Shipping Address</p>
                    <p style="color: black; margin:0;"><?php echo htmlspecialchars($_POST['address-line1']);?></p>
                    <p style="color: black; margin:0;"><?php echo htmlspecialchars($_POST['address-line2']);?></p>
                    <p style="color: black; margin:0;"><?php echo htmlspecialchars($_POST['town']);?></p>
                    <p style="color: black; margin:0;"><?php echo htmlspecialchars($_POST['postcode']);?></p>
                </div>
            </div>
            <div class="column-order-selected-right">
                <div class="order-top-box-right">
                <?php include('classes/getSelectedOrder.classes.php');
                    if (isset($orderItems) && $orderItems) {
                        foreach ($orderItems as $row) {?>
                            <div class="order-box">
                                <div class="order-item-image">
                                    <div class="circle"><p><?php echo htmlspecialchars($row['quantity']);?></p></div>
                                    <img style="height: 50px; width: 50px;"src="/assets/products/<?php echo htmlspecialchars($row['print_Image']);?>" alt="">
                                </div>
                                <div class="order-p">
                                    <p><?php echo htmlspecialchars($row['print_Name']);?></p>
                                    <?php if ($_POST['order_Discount'] > 0){ //if there is a discount on order
                                        ?> <!--Will put line thorugh original price and red if disocunt -->
                                        <p style="text-decoration: line-through; color: red;">£<?php echo number_format($row['print_Price'] * $row['quantity'],2);?></p>
                                        <?php //no disocunt value calculated and discount value calculated. 
                                        $noDiscount = $row['print_Price'] * $row['quantity'];
                                        $discount = $noDiscount * ($_POST['order_Discount'] / 100);
                                        $finalPrice = $noDiscount - $discount;
                                        ?><p>£<?php echo number_format($finalPrice,2);?></p><?php //displays the new disocunted price of each item
                                    }else{
                                        ?>
                                        <p>£<?php echo number_format($row['print_Price'] * $row['quantity'],2);?></p>
                                        <?php

                                    }
                                    ?>
                                </div>
                            </div>
                        
                    <?php } }?>
                    <div class="total-section">
                        <div class="total-left">
                            <p>Total</p>
                        </div>
                        <div class="total-right">
                            <p>£<?php echo number_format($_POST['order_Total'],2);?></p>
                        </div>
                    </div>
                </div>    
             </div>
        </div>


        
        

        
    </div>
    
    
<script type = "text/javascript" src="/jscomponents/activepage.js"></script>
<script type = "text/javascript" src="/jscomponents/search.js"></script>
<script type = "text/javascript" src="/jscomponents/livesearch.js"></script>
<script src="/jscomponents/navigation.js"></script>
<script type = "text/javascript" src="/jscomponents/scrollreveal.js"></script>
</body>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
