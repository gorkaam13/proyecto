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
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
$suma = 0;

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
$suma = $suma +  ;
$total = $suma;


?>
<html>
<body>

 <form action="compras.php" method="GET">
     total:
<input type="text" name="total" value=" <?php echo $total ?>"><br>
    <input type="submit" value="comprrar">
 </form>
</body>
</html>

<?php
$conn->close();
?>