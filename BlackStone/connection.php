<?php

$host = "localhost";
$user = "root";
$pass = "";
$basedatos = "blackstone9";
$connection = mysqli_connect($host, $user, $pass, $basedatos)
or die("Error al conectar a la base de datos");
// UTF-8 conjunto de caracteres por defecto para conexión MySQL
mysqli_query ($connection, "SET NAMES 'utf8'");
  
?>
