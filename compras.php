<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."index.php");
}


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

$user = 'user';
$total = $_GET['total'];

$sql2 = "INSERT INTO compras (buyer, money )
VALUES ('$user','$total')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: editor.php");