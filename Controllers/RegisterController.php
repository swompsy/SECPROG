<?php
session_start();
require "./Connection.php";

// Sanitize and validate input
function sanitizeInput($input, $type) {
    $input = trim($input);
    $input = htmlspecialchars($input, ENT_QUOTES);
    $input = stripslashes($input);

    if ($type === 'username') {
        // Username can only contain alphanumeric characters
        if (!ctype_alnum($input)) {
            $_SESSION['message'] = "Username can only contain alphanumeric characters";
            header("Location: ../HTML/Register.php");
            exit();
        }
    } elseif ($type === 'fullname') {
        // Fullname can only contain letters and spaces
        if (!preg_match("/^[a-zA-Z\s]+$/", $input)) {
            $_SESSION['message'] = "Fullname can only contain letters and spaces";
            header("Location: ../HTML/Register.php");
            exit();
        }
    }

    return $input;
}

// Get data from the register form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = sanitizeInput($_POST['fullname'], 'fullname');
    $email = $_POST['email'];
    $username = sanitizeInput($_POST['username'], 'username');
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if Email exists
    $query = "SELECT Email FROM user WHERE Email = ?;";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows === 1) {
        $_SESSION['message'] = "Email already exists";
        header("Location: ../HTML/register.php");
        exit();
    } else {
        //insert data into database
        $query = "INSERT INTO user (FullName, Email, UserName, Password) VALUES (?, ?, ?, ?);";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssss", $fullname, $email, $username, $hashed_password);

       if($stmt->execute()) {
            $_SESSION['message'] = "Register successfully";
            header("Location: ../HTML/login.php");
            exit();
        } else {
            $_SESSION['message'] = "Register failed";
            header("Location: ../HTML/register.php");
            exit();
        }
        $stmt->close();
    }
}
