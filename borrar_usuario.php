<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."index.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="borrar.php" method="GET">
    name:<br>
    <input type="text" name="user" value=""><br>   
    <input type="submit" value="borrar">
    
    </form>
</body>
</html>