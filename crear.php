<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_GET['user'];
$password= $_GET['password'];

$pass = $password;
$hash = password_hash($pass, PASSWORD_DEFAULT);
//echo $hash;


$sql = "INSERT INTO users (user, pass)
VALUES ('$user', '$hash')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: login.html");