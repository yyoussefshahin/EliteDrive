<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];
$car_id = $_POST['car_id'];

$sql = "INSERT INTO cart (user_id, car_id, price)
        VALUES ($user_id, $car_id, $price)";

$conn->query($sql);

header("Location: cart.php");
exit();
?>