<?php
session_start();
require 'functions.php';

// cek cookie
if ( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }

} 
if ( isset($_SESSION["login"]) ){
    header("Location:index.php");
    exit;
}


if ( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if ( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if ( isset($_POST["remember"]) ) {
                // buat cookie
                setcookie ('id', $row['id'], time()+60);
                setcookie ('key', hash('sha256', $row['username']), time()+60);
            }
            header("Location:index.php");
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
        
<div class="container">
    <div class="login"> 
    <form action="" method="POST">
         <?php if( isset($error)) : ?>
        <p class="error">username / password salah</p>
        <?php endif; ?>
    
        <h1>Login</h1>
        <hr>
        <p>Petro Perkasa Indonesia</p>
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
            <label for="remember" class="remember-label">Ingat Saya
            <input type="checkbox" name="remember" id="remember" class="remember-checkbox">
            </label>
            </li>

            <li>
                <button type="submit" name="login">Login!</button>
            </li>
        </ul>
    </form>
    </div> 
    <div class="right">
        <img src="img/logo.jpg" alt="logo">
    </div>
</div>
    
</body>
</html>