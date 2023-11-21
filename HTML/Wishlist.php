<?php
    session_start();
    if ($_SESSION['login'] !== true) {
        header("Location: /front-end/Login Page & Register Page/HTML/Login.php");
    }
    require "../Controllers/Connection.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/Wishlist.css">
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
                    <img src="../assets/logo_veji.png" alt="veji">
                </a>
            </div>
            
            <div class="search-bar-container">
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <button class="search-close">&times;</button>
                </div>
            </div>

            <div class="additional-logos">
                <img src="../assets/search.png" alt="search-logo" class="logo" id="searchLogo">
                <img src="../assets/wishlist.png" alt="wishlist-logo" class="logo">
                <img src="../assets/history.png" alt="history-logo" class="logo">
                <img src="../assets/keranjang.png" alt="keranjang-logo" class="logo">
                <img src="../assets/logo_SecProg.png" alt="logo-only" class="logo">
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
                <img src="assets/wishlist.png" alt="Product Image">
            </div>
        </div>
    </div>
<?php
};
$db->close();
?>



</div>

    <script src="script.js"></script>
</body>
</html>