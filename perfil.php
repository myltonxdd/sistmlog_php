<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Sing-up</h1>
    <form action="subirimg.php" method="post" enctype="multipart/form-data">
        
        <label for="img">Sube tu imagen: </label>
        <input type="file" name="img" id="img" />
        <br>
        <input type="submit" value="Enviar" />
    </form>

    <?php
        require("conection.php");
        $query = "SELECT * FROM users";
        $resultado = $mysqli->query($query);

        while($fila = $resultado->fetch_assoc()){
            $datosImg = base64_encode($fila["imagen"]);
           ?>
           <img src="data:image/jpg;base64,<?php $datosImg ?>" alt="">;
           <?php
        }
    ?>
</body>
</html>