<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."logi.html");
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

$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$imagen= $_GET['imagen'];


$sql = "INSERT INTO productos ( nombre, precio, img)
VALUES ('$nombre','$precio', '$imagen')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: editar.php");