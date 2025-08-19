<?php
include 'db.php';
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
 
$msg = "";
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
 
    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['name'];
            header("Location: index.php");
            exit(); // Always exit after header redirect
        } else {
            $msg = "Invalid password.";
        }
    } else {
        $msg = "No account found with that email.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Domain Finder</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="cart.php">Cart (<?= count($_SESSION['cart']) ?>)</a>
        <a href="sign.php">Sign Up</a>
    </nav>
</header>
 
<main>
    <h2>Login</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <p><?= $msg ?></p>
</main>
</body>
</html>
 
 
