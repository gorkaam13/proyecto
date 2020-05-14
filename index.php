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
//


$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "nombre: " . $row["nombre"]. "<br> precio: " . $row["precio"]. "<br> <img width='20%' src=img/" . $row["imagen"] . "> <br><hr/>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>