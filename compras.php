<?php
session_start();
if (!isset($_SESSION['user'])){   
    header('Location: '."login.html");
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

$user = $_SESSION['user'];
$nombre = $_GET['nombre'];
$precio = $_GET['precio'];


$sql = "INSERT INTO compras (buyer, nombre, dinero)
VALUES ('$user','$nombre', '$precio')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: tienda.php");