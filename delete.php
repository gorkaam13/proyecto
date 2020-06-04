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
$sql = "DELETE FROM productos WHERE nombre = $nombre";
$result = $conn->query($sql);
header("Location: editar.php");