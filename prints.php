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
    <?php

    if(isset($_GET['page-nr'])){
        $id = $_GET['page-nr'];
    }else{
        $id = 1;
    }

    ?>
</head>
<body id="<?php echo $id?>">
    <?php include('components/navigation.php');?> <!--Get navbar  -->
    <!-- cover image-->
    <div class="coverImage">
        <div class="darkness"></div><!--To add a black cover over image -->
        <p class="cover-image-header">Giclée Prints</p>
        <img class="img" style="background-size: contain;" src="assets/aa-LW-banner-website-Tom---misc4.jpg" alt="Cover image" />
    </div>
    <div class="main-content">
        <div class="filter-section">
            <p>Filter:</p>
            <a class="availability-button">
                <p>Availability</p>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m19 9-7 7-7-7"/>
                </svg>
            </a>
        </div>
        <!--
        <div class="availability-drop">
                <div class="available-filter">
                    <div class="tickbox"></div>
                    <p>Available</p>
                </div>
                <div class="unavailable-filter">
                    <div class="tickbox"></div>
                    <p>Available</p>
                </div>
            </div>
        <div class="availability-section">
        
        </div>
-->
        <div class="prints-row">
            <?php include('classes/getPrints.classes.php');
            //set category to print for sql statment
            $category = "print";
            $getPrints = new GetPrints();
            $pages = $getPrints->fetchPages();
            $prints = $getPrints->fetchProducts($category);
            //number of pages
            if (isset($prints) && $prints) {
            foreach ($prints as $row) { ?>
            <div class="column">
                <img src="/assets/products/<?php echo htmlspecialchars($row['print_Image']);?>" alt="Print" style="width:100%;">
                <a class="print-name-head" href="selectedPrints.php?print_ID=<?php echo htmlspecialchars(string: $row['print_ID']);?>"><p><?php echo htmlspecialchars($row['print_Name']);?></p></a>
                <p class="print-price-tag">£<?php echo htmlspecialchars($row['print_Price']);?> GBP</p>
            </div>
            <?php } }?>
        </div>

        <div class="page-info">
            <?php 
            if(!isset($_GET['page-nr'])){
                $page = 1; //if not page requeest it iso n the first page
            }
            else{
                $page = $_GET['page-nr'];
            }
            ?>
            Showing <?php echo $page ?> of <?php echo $pages ?> pages
        </div>
        <div class="pagination">
            <a href="?page-nr=1">First</a>


            <?php 
            
            if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1){
                ?>
                <a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Previous</a>
                <?php
            }else{
                ?>
                <a>Previous</a>
                <?php
            }
            ?>


            <div class="page-numbers">
                <?php
                    for($counter = 1; $counter <= $pages; $counter++){
                        ?>
                        <a href="?page-nr=<?php echo $counter ?>"><?php echo $counter?></a>
                        <?php
                    }
                    ?>
            </div>

            <?php

            if(!isset($_GET['page-nr'])){ //if on the first page
                ?>

                <a href="?page-nr=<?php echo $pages ?>">Last</a>

                <?php
            }else{
                if($_GET['page-nr'] >= $pages){ //if on the last page
                    ?>
                    <a>Next</a>
                    <?php
                }else{ //add one when next pressed 
                    ?>
                    <a href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a>
                    <?php
                }
            }

            ?>
            <a href="?page-nr=<?php echo $pages?>">Last</a>
        </div>
    </div>

    <script>
        let links = document.querySelectorAll('.page-numbers > a');
        let bodyId = parseInt(document.body.id) - 1;
        links[bodyId].classList.add("active");
        </script>
    





<?php include('components/footer.html')?> <!--Add footer to page-->
<script src="/jscomponents/navigation.js"></script>
<script type = "text/javascript" src="/jscomponents/activepage.js"></script>
<script type = "text/javascript" src="/jscomponents/search.js"></script>
<script type = "text/javascript" src="/jscomponents/scrollreveal.js"></script>
<script type = "text/javascript" src="/jscomponents/livesearch.js"></script>
</body>


<script src="/jscomponents/navigation.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
