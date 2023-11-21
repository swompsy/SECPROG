<?php
    session_start();
    if($_SESSION['login'] !== true){
        header("Location: login.php");
    }
    require "../Controllers/Connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
<header class="header">
        <div class="header-inner">
            <div class="logo-container">
                <img src="../source/veji-logo.png" alt="Your Logo">
            </div>
            
            <div class="search-bar-container">
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <button class="search-close">&times;</button>
                </div>
            </div>

            <div class="additional-logos">
                <img src="../source/search.png" alt="Logo 1"  class="search-icon" class="logo">
                <img src="../source/wishlist.png" alt="Logo 2" class="logo">
                <img src="../source/icon-notebook.png" alt="Logo 3" class="logo">
                <img src="../source/keranjang.png" alt="Logo 4" class="logo">
                <img src="../source/v-logo.png" alt="Logo 5" class="logo" id="vLogo">
            </div>
        </div>
    </header>

    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="./home.php">Home</a></li>
            <li><a href="./about.html">About Us</a></li>
        </ul>
    </nav>
    <?php 
$query = "SELECT * FROM Product";
$result = $db->query($query);

?>
<div class="card-container">
<?php

while ($row = $result->fetch_assoc()){
?>
    <div class="wishlist-card">
        <img src="<?php echo $row['Image'];?>" alt="Product Image">
        <div class="wishlist-details">
            <div class="wishlist-name">
                <h3><?php echo $row['Name'];?></h3>
            </div>
                <div class="wishlist-price">
                    <h3><?php echo 'Rp.' . $row['Price'] . '.000';?></h3>
                </div>
            <div class="rating">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
            </div>
            <div class="heart-icon">
                <img src="assets/wishlist.png" alt="Product Image">
            </div>
        </div>
    </div>
<?php
};
$db->close();
?>



</div>
</body>

<script src="../JS/search.js"></script>
<script src="../JS/home.js"></script>
</html>