<?php


if(isset($_FILES["img"])){
    require("conection.php");
    $datos = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
    
    $query= "INSERT INTO users (imagen) VALUES ('$datos') ";
    $resultado = $mysqli->query($query);
    $mysqli->close();
}


?>