<?php
session_start();

if (isset($_SESSION['locked'])) {
    $difference = time() - $_SESSION['locked'];
    if ($difference < 30) {
        // User is still locked out
        $_SESSION['message'] = "Too many login attempts. Please try again in 30 seconds.";
        header("Location: ../HTML/login.php");
        exit();
    } else {
        // Lockout period has expired, reset the lockout session variables
        unset($_SESSION['locked']);
        unset($_SESSION['login_attempt']);
    }
}

require "./Connection.php";

// Check if user is already logged in
$_SESSION['login'] = false;

//initialize login attempt counter
if (!isset($_SESSION['login_attempt'])) {
    $_SESSION['login_attempt'] = 0;
}

// Check if the maximum login attempts have been reached
if ($_SESSION['login_attempt'] > 3) {
    // Set alert message and reset attempts counter after 30 seconds
    $_SESSION['locked'] = time();
    $_SESSION['message'] = "Too many login attempts. Please try again in 30 seconds.";
    $_SESSION['login_attempt'] = 0;

    // Redirect to login page
    header("Location: ../HTML/login.php");
    exit();
}

//get data from login form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //check if Email exists
    $query = "SELECT * FROM user WHERE Email = ?;";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['Password'])) {
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $row['UserID'];
            $_SESSION['username'] = $row['UserName'];
            $_SESSION['fullname'] = $row['FullName'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['address'] = $row['Address'];
            $_SESSION['numberphone'] = $row['NumberPhone'];
            header("Location: ../HTML/home.php");
            exit();
        } else {
            $_SESSION['message'] = "Incorrect password";
            $_SESSION['login_attempt']++;
            header("Location: ../HTML/login.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "Email does not exist";
        header("Location: ../HTML/login.php");
        exit();
    }
}
