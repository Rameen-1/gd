<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
// Include DB connection
include 'db.php';
 
// Start session and initialize cart
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Domain Finder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Domain Finder</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="cart.php">Cart (<?= count($_SESSION['cart']) ?>)</a>
        <?php if (isset($_SESSION['user'])): ?>
            <span style="color: #0f0;">Hello, <?= htmlspecialchars($_SESSION['user']) ?>!</span>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="sign.php">Sign Up</a>
        <?php endif; ?>
    </nav>
</header>
 
