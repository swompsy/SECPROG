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
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">

    <!-- LINK CSS-->
    <link rel="stylesheet" href="/CSS/profile.css">
    
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="header-inner">
            <div class="logo">
                <a href="./home.php">
                    <img src="/assets/veji-logo.png" class="veji">
                </a>
            </div>

            <div class="search-bar-container">
                <div class="search-bar" id="searchBar">
                    <input type="text" placeholder="search">
                    <button class="search-close" id="searchClose">&times;</button>
                </div>
            </div>

            <div class="additional-logos">
                <a href="#"><img src="/assets/search.png" alt="search-logo" class="logo" id="searchLogo"></a>
                <a href="/HTML/wishlist.html"><img src="/assets/wishlist.png" alt="wishlist-logo" class="logo"></a>
                <a href="/HTML/payment.html"><img src="/assets/history.png" alt="history-logo" class="logo"></a>
                <a href="/HTML/cart.html"><img src="/assets/keranjang.png" alt="keranjang-logo" class="logo"></a>
                <a href="/HTML/profile.php"><img src="/assets/v-logo.png" alt="logo-only" class="logo"></a>
            </div>

        </div>
    </header>


    <div class="profile-container">
        <div class="profile-picture">
            <img src="/assets/profilepicture.png" alt="profilepicture" class="pict">
        </div>
        <div class="profile-content">
            <p><?php echo $_SESSION['username']?></p>
            <p><?php echo $_SESSION['email']?></p>
            <p><?php echo '+62'.$_SESSION['numberphone']?></p>
        </div>

        <div class="logout-container">
            <button class="logout" id="logoutButton">Log Out</button>
        </div>
        
        <div class="pop_up" id="popup">
            <div class="pop_up-content">
                <button class="pop_up-close" id="closePopup"></button>
                <div class="pop_up-info">
                    <p>Are You Sure?</p>
                </div>
                <div class="pop_up-button">
                    <button class="pop_up-no" id="cancelButton">No</button>
                    <button class="pop_up-yes" id="confirmButton">Yes, Log Out</button>
                </div>
            </div>
        </div>
    
<form id="addModalForm" action="../Controllers/updateaddress.php" method="post">
    <div id="addModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeAddModal">&times;</span>
            <h2>Rename Address</h2>
            <h4>Enter New Address</h4>
            <input type="text" id="change-address" name="change-address" class="change-address">
            <button class="Submit-btn" id="addCategoryButton">Submit</button>
        </div>
    </div>
</form>

        <div class="settings-container">

            <div class="address-container">
                <div class="address-logo">
                    <img src="/assets/icon _pin destination_.svg" alt="address-logo" class="address-logo">
                </div>
                <div class="address-title">
                    <p>Address</p>
                </div>
                
                <div class="address-status">
                    <p>utama</p>
                </div>

                <div class="address-info">
                    <p><?php echo $_SESSION['address']?></p>
                </div>

                <div class="arrow-vector-1">
                    <img src="/assets/Vector.svg" alt="arrow-vector" class="arrow-vector" id="rename-address">
                </div>
            </div>

            <div class="history-container">
                <div class="history-logo">
                    <img src="/assets/icon _files history_.svg" alt="history-logo" class="history-logo">
                </div>

                <div class="history-title">
                    <p>Daftar Pesanan</p>
                </div>

                <div class="history-info">
                    <p>Lihat seluruh riwayat dan status pesanan</p>
                </div>

                <div class="arrow-vector-2">
                    <img src="/assets/Vector.svg" alt="arrow-vector" class="arrow-vector">
                </div>

            </div>

            <div class="help-container">

                <div class="help-logo">
                    <img src="/assets/icon _help circle_.svg" alt="help-logo" class="help-logo">
                </div>

                <div class="help-title">
                    <p>Bantuan</p>
                </div>

                <div class="help-info">
                    <p>Temukan informasi yang dibutuhkan</p>
                </div>

                <div class="arrow-vector-3">
                    <img src="/assets/Vector.svg" alt="arrow-vector" class="arrow-vector">
                </div>

            </div>

        </div>
    
    
    
    
    </div>


<script src="/JS/profile.js"></script>
<script src="/JS/popout.js"></script>
</body>
</html>