<?php
    require "../Config/database.php";
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $config;
    $db = new mysqli(
        $config["server"],
        $config["username"],
        $config["password"],
        $config["database"]
    );

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

// Set character set to utf8 (or your preferred character set)
$db->set_charset("utf8");
    
?>

