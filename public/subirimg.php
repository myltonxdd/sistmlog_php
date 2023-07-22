<?php

require("conection.php");

if($_SERVER["REQUEST_METHOD"]== "POST"){

    $correo = $_POST["email"];
    $constraseña = $_POST["pasword"];
    $phone = $_POST["phone"];
    $bio = $_POST["bio"];
    $nombre = $_POST["name"];

        
    // PREPARO EL QUERY

    $query= "UPDATE users SET nombre='$nombre', email='$correo', pasword='$constraseña', bio='$bio', phone='$phone' WHERE id=1";
    
    $resultado =$mysqli->query($query);
    
    if(($_FILES["img"]["tmp_name"])!= ""){
        
        $imagen = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));

        $query= "UPDATE users SET image='$imagen' WHERE id=1";
        
        $resultado =$mysqli->query($query);
    }

   
}




//cierra la conexion
$mysqli->close();
/* header("Location: login.php"); */

?>