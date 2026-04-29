<?php session_start(); ?>

<h1>EliteDrive Cars</h1>


<form action="add.php" method="POST">
    <input type="hidden" name="name" value="Ferrari">
    <input type="hidden" name="price" value="250000">
    <button type="submit">Add Ferrari</button>
</form>


<form action="add.php" method="POST">
    <input type="hidden" name="name" value="Lamborghini">
    <input type="hidden" name="price" value="300000">
    <button type="submit">Add Lamborghini</button>
</form>

<br>

<a href="cart.php">Go to Cart</a>