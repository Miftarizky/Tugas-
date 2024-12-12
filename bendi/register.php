<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute(['username' => $username, 'password' => $hashedPassword]);


    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Bendi Car</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/Login.css">
</head>
<body>
    <div class="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="">
                <h1>Sign Up</h1>
                <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
                <a href="login.php" class="back-login">Sudah punya akun?</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Selamat Datang!</h1>
                    <p>Isi data diri Anda untuk memulai perjalanan bersama kami.</p>
                    <button class="ghost" onclick="window.location.href='login.php'">Sign In</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
