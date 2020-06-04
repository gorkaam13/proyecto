<?php
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

// formulariotik bidalitako datuak irakurri
// leer desde el formulario
$user =  $_GET['user'];
$password = $_GET['password'];
//
$sql = "SELECT * FROM users WHERE user = '$user';";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($user == $row["user"]){
        if (password_verify($password, $row["pass"])) {
            session_start();
            $_SESSION['user'] = $user;
            header("Location: tienda.php");
        } else {
           header('Location: '."login.html");
        }
    } else {
        header('Location: '."login.html");
    }
} else {
   header('Location: '."login.html");
}
$conn->close();