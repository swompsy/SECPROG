<?php
    session_start();

    session_destroy();

    header("Location: /front-end/Login Page & Register Page/HTML/Login.php");

    exit();
?>