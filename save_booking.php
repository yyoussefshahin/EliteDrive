<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $car_id = $_POST['car_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO bookings (car_id, name, email)
            VALUES ('$car_id', '$name', '$email')";

    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Booking Confirmed</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

<style>
body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: url('imgs/ferrari2.jpg') center/cover no-repeat;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.8);
}

.card {
    position: relative;
    z-index: 1;
    background: rgba(20,20,20,0.85);
    padding: 40px;
    border-radius: 12px;
    text-align: center;
    border: 1px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 30px rgba(227,6,19,0.25);
    width: 400px;
}

h1 {
    color: #e30613;
    margin-bottom: 10px;
    letter-spacing: 1px;
}

p {
    opacity: 0.85;
    margin-bottom: 25px;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    background: #e30613;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    transition: 0.3s;
}

.btn:hover {
    background: #ff1e2d;
    transform: scale(1.05);
}
</style>
</head>

<body>

<div class="overlay"></div>

<div class="card">

<?php if ($result): ?>

    <h1>Booking Confirmed</h1>
    <p>Your VIP appointment has been successfully reserved.<br>
    We will contact you shortly.</p>

<?php else: ?>

    <h1>Error</h1>
    <p>Something went wrong. Please try again.</p>

<?php endif; ?>

<a href="index.html" class="btn">Back to Showroom</a>

</div>

</body>
</html>