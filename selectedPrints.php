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
    <title>Prints</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/header-logo.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <?php include('components/navigation.php');?> <!--Get navbar  -->
    <!-- cover image-->
    <div class="coverImage">
        <div class="darkness"></div><!--To add a black cover over image -->
        <p class="cover-image-header">Prints</p>
        <img class="img" style="background-size: cover;" src="assets/coverFinal.jpg" alt="Cover image" />
    </div>
    <div class="main-content">
        <hr>
    
        <div class="selected-print">
            <?php include('classes/selectedPrints.classes.php');
                include('classes/checkStock.classes.php');
                $stockCheck = new CheckStock();//new instance of stock check class
                $duplicate = new DuplicateItem();//new instance of duplicate item class
                if (isset($print) && $print) {
                foreach ($print as $row) { ?>
                <?php
                $print_ID = $row['print_ID'];
                $print_Name = $row['print_Name'];
                if(isset($_SESSION["userid"])){
                    $stockCheck = $stockCheck->getPrintStock($print_ID);
                    $duplicate = $duplicate->checkDuplicate($print_Name, $userID);
                }?>
                <div class="left-side">
                    <img src="/assets/products/<?php echo htmlspecialchars($row['print_Image']);?>" alt="print image">
                </div>
                <div class="right-side">
                <p class="selected-header"><?php echo htmlspecialchars($row['print_Name']);?></p>
                <p class="selected-price">£<?php echo htmlspecialchars($row['print_Price']);?></p>
                    <p>Quantity</p>
                    <form method="post" action="includes/basket.inc.php" class="add-to-basket">
                        <input type="hidden" name="customer_ID" value="<?php echo htmlspecialchars($userID); ?>"/>
                        <input type="hidden" name="print_ID" value="<?php echo htmlspecialchars($row['print_ID']); ?>"/>
                        <input type="hidden" name="print_Name" value="<?php echo htmlspecialchars($row['print_Name']); ?>"/>
                        <input type="hidden" name="print_Img" value="<?php echo htmlspecialchars($row['print_Image']); ?>"/>
                        <input type="hidden" name="print_Price" value="<?php echo htmlspecialchars($row['print_Price']); ?>"/>
                        <input type="number" name="print_Quantity" value="1" style="width: 20%; margin: 10px 0;"/>
                        <?php //out of stock message
                        if ($row['print_Stock'] > 0 || null){
                            ?>
                            <p style="color: red;">Only <?php echo htmlspecialchars($row['print_Stock']);?> left in stock!</p>
                        <?php    
                        }else{
                            ?>
                            <p style="color: red;">Temporarily out of stock!</p>
                            <?php
                        }
                        ?>
                        <!-- end of out of stock code -->
                        <?php
                        if(isset($_SESSION["userid"])){
                            if ($stockCheck > 0 && $duplicate == 0){
                                ?>
                                <button class="addBasketButton1" type="submit" name="submit">Add to Basket</button>
                            <?php
                            }
                            if ($duplicate == 1){?>
                                <p>Print is already in your basket!</p>
                                <?php
                            }
                        }else{
                            ?><p>Sign in to add items to basket</p><?php
                        }?>
                    </form>
                    <?php } }
                else{
                    ?>
                    <p></p>
                <?php }?>
                <p class="selected-desc"><?php echo htmlspecialchars($row['print_Desc']);?></p>
                </div>
            </div>
    </div>
    
    



<script src="/jscomponents/navigation.js"></script>
<script type = "text/javascript" src="/jscomponents/activepage.js"></script>
<script type = "text/javascript" src="/jscomponents/scrollreveal.js"></script>
<script type = "text/javascript" src="/jscomponents/search.js"></script>
<script type = "text/javascript" src="/jscomponents/livesearch.js"></script>
<?php include('components/footer.html')?> <!--Add footer to page-->
</body>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
