<?php $car_id = $_GET['car_id']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Book a Luxury Car Meeting</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

<style>
body {
    margin: 0;
    font-family: 'Inter', sans-serif;
     background-color: #1a1a1a;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

/* dark overlay */
.overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.75);
    z-index: 0;
}

.container {
    position: relative;
    z-index: 1;
    width: 400px;
    padding: 30px;
    background: rgba(20,20,20,0.85);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 12px;
    box-shadow: 0 0 30px rgba(227,6,19,0.2);
    backdrop-filter: blur(10px);
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #e30613;
    letter-spacing: 1px;
}

input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 6px;
    outline: none;
    background: rgba(255,255,255,0.1);
    color: white;
}

input::placeholder {
    color: #ccc;
}

button {
    width: 100%;
    padding: 12px;
    margin-top: 15px;
    background: #e30613;
    border: none;
    border-radius: 6px;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #ff1e2d;
    transform: scale(1.03);
}

.small {
    font-size: 0.85rem;
    opacity: 0.7;
    margin-top: 10px;
}
</style>
</head>

<body>

<div class="overlay"></div>

<div class="container">

    <h2>Luxury Booking</h2>
    <p class="small">Reserve a private meeting for your purchase</p>

    <form action="save_booking.php" method="POST">

        <input type="hidden" name="car_id" value="<?php echo $car_id; ?>">

        <input type="text" name="name" placeholder="Full Name" required>

        <input type="email" name="email" placeholder="Email Address" required>

        <button type="submit">Confirm Booking</button>

    </form>

</div>

</body>
</html>