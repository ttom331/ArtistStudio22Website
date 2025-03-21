<nav>
    <a class="logo" href="index.php"><img src="assets/logo.jpg"/></a>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="petPortrait.php">Pet Portraits</a></li>
        <li><a href="prints.php">Prints</a></li>
        <li><a href="originals.php">Originals</a></li>
        <li><a href="greetingCards.php">Greetings Cards</a></li>
    </ul>
    <div class="right-nav">
    <?php 
                if(isset($_SESSION["userid"]))
                {
                    $userID = $_SESSION['userid'];
                    $username = $_SESSION['user_username'];
                    $first_letter = substr($username, 0, 1)
                    
            ?> 
        
        <a class="search-icon" id="search-icon">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
        </a>
        <div class="search-background" id="search-form">
            <form class="search-bar" action="printSearch.php" method="GET" autocomplete="off">
                <input id="search-input" type="text" placeholder="Search.." name="search">
                    <svg id="close-search" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                        <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"></path>
                    </svg>
            </form>
        </div>
        <a href="account.php" class="account-icon" style="text-transform: uppercase; color: black; font-weight: 600;"><p><?php echo $first_letter?></p></a>
        <a href="basket.php" class="nav-btn-no-style"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="28" height="26" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/></svg></a>
        <i class="fa fa-bars" id="ham-menu"></i>
            <ul class="nav-links-responsive">
                <li><a href="index.php">Home</a></li>
                <li><a href="petPortrait.php">Pet Portraits</a></li>
                <li><a href="prints.php">Prints</a></li>
                <li><a href="originals.php">Originals</a></li>
                <li><a href="greetingCards.php">Greetings Cards</a></li>
                <div class="icon-responsive">
                    <li><a href="basket.php" class="nav-btn-no-style"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="28" height="26" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/></svg></a></li>
                    <li><a href="account.php" class="account-icon" style="text-transform: uppercase; color: black; font-weight: 600; justify-content: center;
                    text-align: center;"><p><?php echo $first_letter?></p></a></li>
                </div>
                <form class="" action="logout.php" method="post" style="display:inline-flex; display: contents;">
                    <a href="includes/logout.inc.php">Sign Out</a>
                </form>
            </ul>
        <?php
                }
                else
                {
            ?>
            <a class="search-icon" id="search-icon">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
            </a>
            <div class="search-background" id="search-form">
                <form class="search-bar" action="printSearch.php" method="GET" autocomplete="off">
                    <input id="search-input" type="text" placeholder="Search.." name="search">
                        <svg id="close-search" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                            <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"></path>
                        </svg>
                </form>
            </div>
               <a href="login.php" class="nav-btn">Sign In</a>
               <i class="fa fa-bars" id="ham-menu"></i>
               <ul class="nav-links-responsive">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="petPortrait.php">Pet Portraits</a></li>
                    <li><a href="prints.php">Prints</a></li>
                    <li><a href="originals.php">Originals</a></li>
                    <li><a href="greetingCards.php">Greetings Cards</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Sign In</a></li>
                </ul>
            <?php
                }
            ?>
    </div>
    <div id="search-results"></div>
</nav>