<?php
    session_start();
    require "./Connection.php";

    $is_login = false;

//get data from login form
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

//check if username exists in database
$query = "SELECT * FROM user WHERE Email = ? AND Password = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $email, $password);

$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

$db->close();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    
    $_SESSION['userid'] = $row['userid'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['login'] = true;
    
    
    header("Location: ../HTML/Home.php");
}else{
    header("Location: ../HTML/Login.php");
    }
}

?>