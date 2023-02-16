<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";


echo $_SESSION['nombre'];

$datos = $conexion->query("SELECT * FROM usuario Where nombre = '".$_SESSION['nombre']."'");
$rowuser = $datos->fetch_assoc();
?>