<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."login.html");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$imagrn= $_GET['imagen'];

$sql = "UPDATE productos 
SET  precio ='$precio', imagen='$imagen' 
WHERE nombre=$nombre";
//echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
header("Location: editar.php");