<?php
require 'functions.php';

if ( isset($_POST["register"]) ) {
    if ( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru telah ditambahkan!');
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="styleregistrasi.css">
</head>
<body>
    <div class="container">
        <h1>CREATE ACCOUNT</h1>
    
    <form action="" method="POST" class="form">
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
                <label for="password2">Konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
        </ul>
    </form>
    </div>
</body>
</html>