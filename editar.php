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
}?>

<html>
<style>
  body {
        background-color:lightblue;
    }
    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  color:white;
}
.active {
color:black;
background-color: white;
}



div { 
  display: block;
  text-align: center;
}


    </style>


<body>  
<div >
    <h1>Camisas Gorka</h1>
    </div>
<ul>
        <li><a  href="inicio.php">expositor</a></li>
        <li><a  href="login.html">login</a></li>
        <li><a  href="tienda.php">tienda</a></li>        
        <li><a class="active" href="editar.php">Editor</a></li>
        <li><a href="registro.php">registro</a></li>
        <li><a href="Regis_compras.php">compras</a></li>
        
        <li style="float:right"><a href="logout.php">Log out</a></li>
      </ul> 
<div><a href="borrar_usuario.php">borrar usuario</a></div>

    <form action="insert.php" method="GET">
     nombre:<br>
    <input type="text" name="nombre" value=""><br>
     precio:<br>
    <input type="text" name="precio" value=""><br>
    imagenes:<br>
    <input type="text" name="img" value="">
    <br><br>
    <input type="submit" value="crear">
    </form>
    <hr>
</body>
</html>
<?php
$sql2 = "SELECT * FROM productos";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "nombre: " . $row["nombre"]. "<br> precio: " . $row["precio"]. "<br> <img width='20%' src=img/" . $row["imagen"] . ">";
        ?>
        <html>
           <body>
<form action="delete.php" method="GET">
        ID:<br>
       <input type="text" name="nombre" value="<?php echo $row["nombre"] ?>"><br>
       <input type="submit" value="borrar">
       </form>
      

       <form action="update.php" method="GET">
    nombre:<br>
    <input type="text" name="nombre" value="<?php echo $row["nombre"] ?>"><br>
    precio:<br>
    <input type="text" name="precio" value="<?php echo $row["precio"] ?>"><br>
    imagen:<br>
    <input type="text" name="img" value="<?php echo $row["imagen"] ?>">
    <br><br>
    <input type="submit" value="modificar">
    </form>

 <br><hr>



    </body>
</html>
<?php
    }
} else {
    echo "0 results";
}