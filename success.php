<?php
session_start();
include 'db.php';

if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];
    $conn->query("DELETE FROM cart WHERE user_id='$user_id'");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Success</title>

<style>
body{
    font-family:Arial;
    background:linear-gradient(135deg,#000,#1a0000);
    color:white;
    text-align:center;
    margin-top:120px;
}

.box{
    background:#111;
    width:500px;
    margin:auto;
    padding:40px;
    border-radius:15px;
}

.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 24px;
    background:red;
    color:white;
    text-decoration:none;
    border-radius:8px;
}
</style>
</head>

<body>

<div class="box">
    <h1> Purchase Successful</h1>
    <p>Welcome to your new luxury experience.</p>
    <a href="index.html">Back to Home</a>
</div>

</body>
</html>