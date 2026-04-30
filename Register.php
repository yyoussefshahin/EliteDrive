<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password != $confirm_password) {
        echo "Passwords do not match!";
    } else {

        header("Location: login.html?name=" . urlencode($fullname));
        exit();
    }

} else {
    echo "Invalid request!";
}

?>