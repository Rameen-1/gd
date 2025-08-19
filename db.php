<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
$host = 'localhost';
$db = 'dbcv4vji7cjqks';
$user = 'ux7oqwxcx8vsf';
$pass = 'v3hxvatbehaf';
 
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
 
