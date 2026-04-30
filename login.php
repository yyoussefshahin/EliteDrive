<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($email) && !empty($password)) {

        echo "<script>
            localStorage.setItem('loggedIn', 'true');
            localStorage.setItem('userEmail', '$email');
            window.location.href = 'index.html';
        </script>";

    } else {
        echo "Please enter email and password!";
    }

}

?>