<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."login.html");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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

    <form action="borrar.php" method="GET">
    name:<br>
    <input type="text" name="user" value=""><br>   
    <input type="submit" value="borrar">
    
    </form>
</body>
</html>