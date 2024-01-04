<?php
session_start();
require "./Connection.php";

// Sanitize and validate input
function sanitizeInput($input)
{

    // Check for the presence of script tags and exit if found
    if (preg_match("/<script[\s\S]*?>[\s\S]*?<\/script>/i", $input)) {
        $_SESSION['message'] = "Invalid input. Script tags are not allowed.";
        header("Location: ../HTML/profile.php");
        exit();
    }
    // Allow only alphanumeric characters, space, and dot
    $input = preg_replace("/[^a-zA-Z0-9 .]/", "", $input);
    $input = trim($input);
    $input = htmlspecialchars($input, ENT_QUOTES);
    $input = stripslashes($input);
    return $input;
}

// get data from form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $UserID = $_SESSION['userid'];
    $newaddress = sanitizeInput($_POST['change-address']);

    // check if the address is null
    if (empty($newaddress)) {
        // If the address is empty, insert a new record
        $query = "INSERT INTO user (Address, UserID) VALUES (?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param("si", $newaddress, $UserID);
    } else {
        // If the address is not empty, update the existing record
        $query = "UPDATE user SET Address = ? WHERE UserID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("si", $newaddress, $UserID);
    }

    $stmt->execute();
    $stmt->close();
    $db->close();

    $_SESSION['address'] = $newaddress;
    header("Location: ../HTML/profile.php");
    exit();
}
