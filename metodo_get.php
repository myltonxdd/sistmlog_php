<?php

/* $nombre = $_GET['nombre'];
$edad = $_GET['edad'];

echo "Hola $nombre, tenes $edad años." */;

/// METODO POST


require("conection.php");

$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$constraseña = $_POST["pasword"];


// PREPARO EL QUERY

$query= "INSERT INTO users(nombre, email, pasword) VALUES('$nombre', '$correo', '$constraseña' )";

$resultado =$mysqli->query($query);

print_r($resultado);

//cierra la conexion
$mysqli->close();

?>