<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid_user = "akmal";
    $valid_pass = "123";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_user && $password === $valid_pass) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
