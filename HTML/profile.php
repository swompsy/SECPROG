<?php
    session_start(); 
    if($_SESSION['login'] !== true){
        header("Location: login.php");
    }
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
    <link rel="stylesheet" href="../CSS/profile.css">
    
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="header-inner">
            <div class="logo">
                <a href="../home page/home.html">
                    <img src="../assets/logo_veji.png" class="veji">
                </a>
            </div>

            <div class="search-bar-container">
                <div class="search-bar" id="searchBar">
                    <input type="text" placeholder="search">
                    <button class="search-close" id="searchClose">&times;</button>
                </div>
            </div>

            <!-- <div class="search-logo">
                <img src="assets/search.png" alt="search-logo" class="logo">
            </div> -->

            <div class="additional-logos">
                <img src="../assets/search.png" alt="search-logo" class="logo" id="searchLogo">
                <img src="../assets/wishlist.png" alt="wishlist-logo" class="logo">
                <img src="../assets/history.png" alt="history-logo" class="logo">
                <img src="../assets/keranjang.png" alt="keranjang-logo" class="logo">
                <img src="../assets/logo_SecProg.png" alt="logo-only" class="logo">
            </div>

            <!-- <div class="wishlist">
                <a href="../">
                    <img src="assets/wishlist.png" alt="wishlist" class="wishlist">
                </a>
            </div>
            <div class="history">
                <a href="../">
                    <img src="assets/history.png" alt="history" class="history">
                </a>
            </div>
            <div class="keranjang">
                <a href="../">
                    <img src="assets/keranjang.png" alt="keranjang" class="keranjang">
                </a>
            </div>
            <div class="logo-only">
                <a href="../home page/home.html">
                    <img src="assets/logo.png" alt="logo-only" class="logo-only">
                </a>

            </div> -->

        </div>
    </header>


    <div class="profile-container">
        <div class="profile-picture">
            <img src="../assets/profilepicture.png" alt="profilepicture" class="pict">
        </div>
        <div class="profile-content">
            <p>Veji</p>
            <p>Veji@company.com</p>
            <p>+62955846136</p>
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
                    <button class="pop_up-yes" id="cancelButton">No</button>
                    <button class="pop_up-no" id="confirmButton">Yes, Log Out</button>
                </div>
            </div>
        </div>

        <div class="settings-container">

            <div class="address-container">
                <div class="address-logo">
                    <img src="../assets/icon _pin destination_.svg" alt="address-logo" class="address-logo">
                </div>
                <div class="address-title">
                    <p>Address</p>
                </div>
                
                <div class="address-status">
                    <p>utama</p>
                </div>

                <div class="address-info">
                    <p>Jl. Kebangsaan no. 64, Jakarta, 18273</p>
                </div>

                <div class="arrow-vector">
                    <img src="../assets/Vector.svg" alt="arrow-vector" class="arrow-vector">
                </div>
            </div>

            <div class="history-container">
                <div class="history-logo">
                    <img src="../assets/icon _files history_.svg" alt="history-logo" class="history-logo">
                </div>

                <div class="history-title">
                    <p>Daftar Pesanan</p>
                </div>

                <div class="history-info">
                    <p>Lihat seluruh riwayat dan status pesanan</p>
                </div>

                <div class="arrow-vector">
                    <img src="../assets/Vector.svg" alt="arrow-vector" class="arrow-vector">
                </div>

            </div>

            <div class="help-container">

                <div class="help-logo">
                    <img src="../assets/icon _help circle_.svg" alt="help-logo" class="help-logo">
                </div>

                <div class="help-title">
                    <p>Bantuan</p>
                </div>

                <div class="help-info">
                    <p>Temukan informasi yang dibutuhkan</p>
                </div>

                <div class="arrow-vector">
                    <img src="../assets/Vector.svg" alt="arrow-vector" class="arrow-vector">
                </div>

            </div>

        </div>
    
    
    
    
    </div>


<script src="../JS/profile.js"></script>
<script src="../JS/popout.js"></script>
</body>
</html>