<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<h2>Data Received (POST):</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
} else {
    echo "Invalid request method!";
}