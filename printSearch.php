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
        <p class="cover-image-header">Prints</p>
        <img class="img" style="background-size: cover;" src="assets/aa-LW-banner-website-Tom---misc4.jpg" alt="Cover image" />
    </div>
    <div class="main-content">
        <hr>
        <form class="searchbar" action="printSearch.php" method="GET">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="row">
            <?php include('classes/getPrintSearch.classes.php');
            $search = $_GET['search'];
            $search_result = $_GET['search'];
            $getPrints = new GetPrintSearch();
            $search = $getPrints->search($search);
            if (isset($search) && $search) {
                $_SESSION['search_message'] = "Search results for '" . $search_result . "'"; ?> 
                <p class="search-success"><?php echo($_SESSION['search_message'])?></p>
                <?php
                foreach ($search as $row) {?>
                <div class="column">
                    <img src="/assets/products/<?php echo htmlspecialchars($row['print_Image']);?>" alt="Denim Jeans" style="width:100%;">
                    <a class="print-name-head" href="selectedPrints.php?print_ID=<?php echo htmlspecialchars(string: $row['print_ID']);?>"><p><?php echo htmlspecialchars($row['print_Name']);?></p></a>
                    <p class="print-price-tag">£<?php echo htmlspecialchars($row['print_Price']);?></p>
                </div>
            <?php } }?>
            <?php if(empty($search)){
                $_SESSION['search_message'] = "Sorry, we can't find any results for '" . $search_result . "'";
                ?>
                
                <p class="search-error"><?php echo($_SESSION['search_message'])?></p>
                <?php
            }
            ?>
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
