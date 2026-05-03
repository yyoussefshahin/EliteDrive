<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EliteDrive Cart</title>

<style>
body{
    font-family: Arial;
    margin:0;
    background: linear-gradient(135deg,#000,#1a0000);
    color:white;
}

.navbar{
    display:flex;
    justify-content:space-between;
    padding:20px 40px;
    background:black;
}

.container{
    max-width:900px;
    margin:auto;
    padding:20px;
}

.card{
    background:#1c1c1c;
    padding:20px;
    margin:15px 0;
    border-left:4px solid red;
    border-radius:10px;
}

.btn{
    display:inline-block;
    padding:12px 24px;
    background:red;
    color:white;
    text-decoration:none;
    border-radius:8px;
    margin-top:20px;
}

.total{
    font-size:24px;
    margin-top:20px;
}
</style>
</head>

<body>

<header class="navbar">
    <h2>Your Cart</h2>
    <a href="index.html">Back to Home</a>
</header>

<div class="container">
<h1>Your Selected Cars</h1>

<?php
$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

$total = 0;

while($row = $result->fetch_assoc()){
    $total += $row['price'];
?>
    <div class="card">
        <h3><?php echo $row['name']; ?></h3>
        <p>$<?php echo $row['price']; ?></p>
    </div>

<?php } ?>

<?php if ($total > 0) { ?>
    <a href="checkout.php" class="btn">Proceed to Checkout</a>
<?php } else { ?>
    <p style="color:gray; margin-top:20px;">
        Your cart is empty. Add cars first.
    </p>
<?php } ?>
</body>
</html>