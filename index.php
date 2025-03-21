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
    <title>Studio22Artz</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/header-logo.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <?php include('components/navigation.php');?>
    <!-- cover image-->
    <div class="coverImage">
        <div class="darkness"></div><!--To add a black cover over image -->
        <p class="cover-image-header">Lisa Wellwood Artist</p>
        <img class="img" style="background-size: cover;" src="assets/coverFinal.jpg" alt="Cover image" />
    </div>
    <div class="main-content">
        <h2>About Me</h2>
        <hr>
        <div class="paragraphs reveal">
            <p>I am a self-taught Pet Portrait & Wildlife Artist living near the Somerset/Dorset border who has a passion for drawing animals and wildlife in detailed coloured pencil.</p>
            <p>I have always had a big love for drawing since I was a young child. Not often was I seen without a pencil in hand, drawing anything I could to try and improve on my skills. After college, I worked as a Graphic Designer for 15 years which meant my 'traditional' drawing skills weren't really as well utilised, but then I began drawing again a few years later after finding my love for it again. Inspired so much by the amazing artists that I saw on social media platforms, I was really spurred on to take my drawing more seriously. With that steely determination behind me, I made notes of what materials and pencils these artists were using and made some arty investments, so that I had what I needed to make a bigger improvement. It has to be said that materials and pencil quality do definitely make a difference to what quality of work you can produce. Without those things, you really do restrict the progress that you can make.</p>
            <p>The rest really, is history. Every drawing I did, gave me more experience and I learnt and improved with each piece. Gradual improvements were made over a few years and I began to be able to see more details and colour where I hadn't done before.</p>
            <p>Due to ongoing chronic health problems, I had to give up my part-time jobs a couple years ago and as a result, I decided to try and pursue my art as a career. It means I can work when I'm able to, and if I'm having a bad day, (more often than not), I don't have to. It's not been easy, but I have been fortunate enough to sell many pieces to buyers both here and abroad – many of whom are returning customers, which I hope is testament to the quality and value of my work. </p>
            <p>I spend most of my time in my little art studio at home, drawing and selling my wildlife art, as well as undertaking regular commissions for Pet Portraits. A lot of my artwork is also made into professionally printed greetings cards, prints and calendars and I am always looking for new ways to expand my business. </p>
        </div>
            <div class="column-carousel">
                <img class="mySlides" src="assets/products/Dinky-Duckling.jpg">
                <img class="mySlides" src="assets/products/Bashful---Fox.jpg">
                <img class="mySlides" src="assets/products/Badger-on-log.jpg">
            </div>
        </div>
    </div>

<script type = "text/javascript" src="/jscomponents/activepage.js"></script>
<script type = "text/javascript" src="/jscomponents/search.js"></script>
<script type = "text/javascript" src="/jscomponents/livesearch.js"></script>
<script type = "text/javascript" src="/jscomponents/carousel.js"></script>
<script src="/jscomponents/navigation.js"></script>
<?php include('components/footer.html')?> <!--Add footer to page-->

</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
