<?php
    session_start();
    require "./Connection.php";
    $_SESSION['login'] = false;

//get data from login form
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

//check if username exists in database
$query = "SELECT * FROM user WHERE Email = ? AND Password = ?;";
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $email, $password);

$stmt->execute();
$result = $stmt->get_result();
$db->close();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    
    $_SESSION['userid'] = $row['UserID'];
    $_SESSION['fullname'] = $row['FullName'];
    $_SESSION['email'] = $row['Email'];
    $_SESSION['username'] = $row['UserName'];
    $_SESSION['password'] = $row['Password'];
    $_SESSION['numberphone'] = $row['NumberPhone'];
    $_SESSION['address'] = $row['Address'];
    $_SESSION['login'] = true;
    header("Location: ../HTML/Home.php");
}else{
    header("Location: ../HTML/Login.php");
    }
}

?>