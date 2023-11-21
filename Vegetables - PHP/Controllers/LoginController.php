<?php
    session_start();
    require "Connection.php";

    $is_login = false;

    //get data from login form
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

//check if email exists in database
$query = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $email, $password);

$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$db->close();


if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    
    $_SESSION['id'] = $row['id'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header("Location: ../HTML/Home.php");
} else {
    header("Location: ../HTML/Login.php");
}

}

?>


