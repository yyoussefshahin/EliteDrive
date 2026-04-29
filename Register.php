<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
    } else {
        echo "Registration successful! Welcome " . $fullname;
    }

} else {
    echo "Invalid request!";
}

?>