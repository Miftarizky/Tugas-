<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bendi Car</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/Login.css">
</head>
<body>
    <div class="container">
        <div class="form-container sign-in-container">
            <form method="POST" action="">
                <h1>Sign in</h1>
                <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <a href="#" class="forgot-password">Lupa kata sandi?</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Halo, Teman!</h1>
                    <p>Daftarkan diri anda dan mulai gunakan layanan kami segera</p>
                    <button class="ghost" onclick="window.location.href='register.php'">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
