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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <?php include('components/navigation.php');?> <!--Get navbar  -->
    <!-- cover image-->
    <div class="coverImage">
        <div class="darkness"></div><!--adds black cover over image -->
        <p class="cover-image-header">Greetings Cards</p>
        <img class="img" style="background-size: cover;" src="assets/coverFinal.jpg" alt="Cover image" />
    </div>
    <div class="main-content">
    <div class="prints-row">
            <?php include('classes/getPrints.classes.php');
            //set category to print for sql statment
            $category = "card";
            $getPrints = new GetPrints();
            $prints = $getPrints->fetchProducts($category);
            if (isset($prints) && $prints) {
            foreach ($prints as $row) { ?>
            <div class="column-greeting">
                <img src="/assets/products/<?php echo htmlspecialchars($row['print_Image']);?>" alt="Card">
                <a class="print-name-head" href="selectedPrints.php?print_ID=<?php echo htmlspecialchars(string: $row['print_ID']);?>"><p><?php echo htmlspecialchars($row['print_Name']);?></p></a>
                <p class="print-price-tag">£<?php echo htmlspecialchars($row['print_Price']);?></p>
            </div>
            <?php } }?>
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
