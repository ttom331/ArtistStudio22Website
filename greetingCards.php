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
    <script type = "text/javascript" src="/jscomponents/scrollreveal.js"></script>
    <title>Greeting Cards</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/header-logo.png" />

</head>
<body>
<nav>
        <a class="logo" href="index.php"><img src="assets/logo.jpg"/></a>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="petPortrait.php">Pet Portraits</a></li>
            <li><a href="prints.php">Prints</a></li>
            <li><a href="greetingCards.php" style="text-decoration: underline;">Greetings Cards</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="right-nav">
        <?php 
                    if(isset($_SESSION["userid"]))
                    {
                        $userID = $_SESSION['userid'];
                        
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
        <div class="darkness"></div><!--adds black cover over image -->
        <p class="cover-image-header">Greetings Cards</p>
        <img class="img" style="background-size: cover;" src="assets/coverFinal.jpg" alt="Cover image" />
    </div>
    <div class="main-content">
        <hr>
        <?php include('classes/getCards.classes.php');
            include('classes/checkStock.classes.php');
            $stockCheckCard = new CheckStockCard();//new instance of stock check class
            $duplicate = new DuplicateItem();//new instance of duplicate item class
            if (isset($cards) && $cards) {
            foreach ($cards as $row) { ?>
            <?php
            $print_ID = $row['print_ID'];
            $print_Name = $row['print_Name'];
            $stockQuantity = $stockCheckCard->getPrintStock($print_ID);
            $duplicateResult = $duplicate->checkDuplicate($print_Name, $userID);?>
        <div class="row">
            <div class="column-greeting">
                <a style="text-decoration: none; color: black;" href="selectedPrints.php?print_ID=<?php echo htmlspecialchars(string: $row['print_ID']);?>"><h3><?php echo htmlspecialchars($row['print_Name']);?></h3></a></li>
                <p><?php echo htmlspecialchars($row['print_Desc']);?></p>
                <p>£<?php echo htmlspecialchars($row['print_Price']);?></p>
                <form method="post" action="includes/basket.inc.php">
                    <input type="hidden" name="customer_ID" value="<?php echo htmlspecialchars($userID); ?>"/>
                    <input type="hidden" name="print_ID" value="<?php echo htmlspecialchars($row['print_ID']); ?>"/>
                    <input type="hidden" name="print_Name" value="<?php echo htmlspecialchars($row['print_Name']); ?>"/>
                    <input type="hidden" name="print_Img" value="<?php echo htmlspecialchars($row['print_Image']); ?>"/>
                    <input type="hidden" name="print_Price" value="<?php echo htmlspecialchars($row['print_Price']); ?>"/>
                    <input type="number" name="print_Quantity" value="1" style="padding: 0px; width: 12%;"/>
                    <?php
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
                    if ($stockQuantity > 0 && $duplicateResult == 0){
                        ?>
                        <button class="addBasketButton1" type="submit" name="submit">Add to Basket</button>
                    <?php
                    }
                    if ($duplicateResult == 1){?>
                        <p>Print is already in your basket!</p>
                        <?php
                    }
                    ?>
                </form>
            </div>
            <div class="column-greeting">
                <img src="/assets/cards/<?php echo htmlspecialchars($row['print_Image']);?>" alt="Denim Jeans" style="width: 100%; height: 400px; object-fit:cover;">
            </div>

        </div>
        

        <?php } }?>
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

<script type = "text/javascript" src="/jscomponents/carousel.js"></script>

<?php include('components/footer.html')?> <!--Add footer to page-->
</body>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
