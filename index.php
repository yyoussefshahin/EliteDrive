<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EliteDrive</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<?php
$userLoggedIn = isset($_SESSION["user_id"]);
?>

<header>
    <h1>EliteDrive</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="store.php">Store</a>
        <a href="cart.php">Cart</a>

        <?php if ($userLoggedIn): ?>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.html">Login</a>
        <?php endif; ?>
    </nav>
</header>

<section class="hero">
    <h2>Luxury Cars Marketplace</h2>
    <p>Find your dream car</p>
</section>

<section class="cars">

<?php
$cars = [
    [
        "name" => "Ferrari",
        "img" => "https://images.unsplash.com/photo-1576020111856-ac48d70c5a04",
        "desc" => "Italian supercar brand known for speed and racing heritage"
    ],
    [
        "name" => "Lamborghini",
        "img" => "https://images.unsplash.com/photo-1619304290984-9345b8788868",
        "desc" => "Aggressive design and extreme performance"
    ],
    [
        "name" => "Rolls Royce",
        "img" => "https://images.unsplash.com/photo-1677552072881-e343a1a5cde3",
        "desc" => "Ultimate luxury and comfort"
    ],
    [
        "name" => "Porsche",
        "img" => "https://images.unsplash.com/photo-1668261833238-fdce0c265ab5",
        "desc" => "German precision and performance"
    ]
];

foreach ($cars as $car):
?>

<div class="car-card">
    <img src="<?= $car['img'] ?>" width="300">
    <h3><?= $car['name'] ?></h3>
    <p><?= $car['desc'] ?></p>
    <button onclick="alert('Go to store.php to buy')">View</button>
</div>

<?php endforeach; ?>

</section>

<section>
    <h2>About EliteDrive</h2>
    <p>Luxury cars marketplace built with PHP.</p>
</section>

<section>
    <h2>Contact</h2>
    <p>
        <a href="mailto:info@elitedrive.com">info@elitedrive.com</a><br>
        <a href="tel:+201097332336">+20 109 733 2336</a>
    </p>
</section>

</body>
</html>