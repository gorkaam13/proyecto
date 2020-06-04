<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."login.html");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
// formulariotik bidalitako datuak irakurri
// leer desde el formulario
$user =  $_GET['user'];

//
$sql = "DELETE FROM users WHERE user = '$user';";
//echo $sql . "<br><br>";
//
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: editar.php");
?>