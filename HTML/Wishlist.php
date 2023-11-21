<?php
    session_start();
    if ($_SESSION['login'] !== true) {
        header("Location: /front-end/Login Page & Register Page/HTML/Login.php");
    }
    require "/Controllers/Connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/CSS/Wishlist.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <div class="header-inner">
            <div class="logo-container">
                <a href="./home.php">
                    <img src="/assets/veji-logo.png" alt="veji">
                </a>
            </div>
            
            <div class="search-bar-container">
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <button class="search-close">&times;</button>
                </div>
            </div>

            <div class="additional-logos">
                <a href="#"><img src="/assets/search.png" alt="Logo 1"  class="search-icon" class="logo"></a>
                <a href="/HTML/wishlist.html"><img src="/assets/wishlist.png" alt="Logo 2" class="logo"></a>
                <a href="/HTML/payment.php"><img src="/assets/history.png" alt="Logo 3" class="logo"></a>
                <a href="/HTML/cart.php"><img src="/assets/keranjang.png" alt="Logo 4" class="logo"></a>
                <a href="/HTML/profile.php"><img src="/assets/v-logo.png" alt="Logo 5" class="logo"></a>
            </div>
        </div>
    </header>

    <nav class="nav-bar">
        <ul class="nav-list">
            <li><a href="./home.php">Home</a></li>
            <li><a href="./about.html">About Us</a></li>
        </ul>
    </nav>

<?php 
$query = "SELECT * FROM Wishlist WHERE userid=?;";
$stmt = $db->prepare($query);
$stmt->bind_param("i", $_SESSION['userid']);
$stmt->execute();
$resultlist = $stmt->get_result();

?>
<div class="card-container">
<?php

while ($rowlist = $resultlist->fetch_assoc()){
    $query = "SELECT * FROM Product WHERE productid=?;";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $rowlist['ProductID']);
    $stmt->execute();
    $resultproduct = $stmt->get_result();
    $rowproduct = $resultproduct->fetch_assoc();
?>
    <div class="wishlist-card">
        <img src="<?php echo $rowproduct['Image'];?>" alt="Product Image">
        <div class="wishlist-details">
            <div class="wishlist-name">
                <h3><?php echo $rowproduct['Name'];?></h3>
            </div>
                <div class="wishlist-price">
                    <h3><?php echo 'Rp.' . $rowproduct['Price'] . '.000';?></h3>
                </div>
            <div class="rating">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
            </div>
            <div class="heart-icon">
                <img src="/assets/wishlist.png" alt="Product Image">
            </div>
        </div>
    </div>
<?php
};
$db->close();
?>



</div>

    <script src="/JS/script.js"></script>
</body>
</html>