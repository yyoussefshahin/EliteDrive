<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Checkout</title>

<style>
body{
    font-family:Arial;
    background:linear-gradient(135deg,#000,#1a0000);
    color:white;
}

.container{
    width:400px;
    margin:80px auto;
    background:#111;
    padding:30px;
    border-radius:12px;
}

input,select{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:none;
    border-radius:8px;
}

button{
    width:100%;
    padding:14px;
    background:red;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}
</style>
</head>

<body>

<div class="container">
<form action="success.php" method="POST">

<h2>Billing Details</h2>

<input type="text" name="name" placeholder="Full Name" required>
<input type="text" name="address" placeholder="Address" required>
<input type="email" name="email" placeholder="Email" required>

<select name="payment" required>
    <option>Credit Card</option>
    <option>Cash on Delivery</option>
</select>

<button type="submit">Confirm Purchase</button>

</form>
</div>

</body>
</html>