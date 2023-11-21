<?php
    session_start();
    require "Connection.php";


//get data from register form
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

//check if email exists in database
if(isset($_POST['email'])) {
    $query = "SELECT * FROM user WHERE email = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows === 1) {
        $_SESSION['message'] = "Email already exists";
        header("Location: /front-end/Login Page & Register Page/HTML/register.php");
    }else{
        $query = "INSERT INTO user (fullname, email, username, password) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssss", $fullname, $email, $username, $password);

        $stmt->execute();
        $stmt->close();
        $db->close();

        $_SESSION['message'] = "Registration successful";
        header("Location: /front-end/Login Page & Register Page/HTML/Login.php");
        }
    }
}

?>