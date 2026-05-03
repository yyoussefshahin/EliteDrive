<?php
session_start();
include 'db.php';

//  check if user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION["user_id"];

//  get form data safely
$name = $_POST["name"];
$price = $_POST["price"];

//  use prepared statement 
$stmt = $conn->prepare("INSERT INTO cart (user_id, car_name, price) VALUES (?, ?, ?)");
$stmt->bind_param("isi", $user_id, $name, $price);
$stmt->execute();

// 🚀 redirect to cart
header("Location: cart.php");
exit();
?>