<?php
session_start();    
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/CSS/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header-inner">
        </div>
    </header>


    <div class="centre-container">
        <div class="register-container">
            <div class="logo-veji">
                <img src="/assets/veji-logo.png" alt="home-background">
            </div>


            <form id="login-form" onsubmit="return validateForm()" action="/Controllers/LoginController.php" method="post">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <?php
                if (isset($_SESSION['message'])) { ?>
                   <p style="color: red"><?= $_SESSION['message']; ?></p>
                <?php unset($_SESSION['message']); }?>

                <div class="form-group">
                    <button type="submit" id="login">Login</button>
                </div>

                <div class="form-group" id="signup-link">
                    <p>Don't have an account ? <a href="/HTML/register.php">Sign up</a></p>
                </div>

            </form>
        </div>
    </div>

    <footer class="footer">
        &copy; 2023 Veji Company
    </footer>

    <script src="/JS/script.js"></script>
</body>

</html>