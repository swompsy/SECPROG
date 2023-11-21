<?php
session_start();
require "./Connection.php";

// get data from form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $UserID = $_SESSION['userid'];
    $newaddress = $_POST['change-address'];

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
?>