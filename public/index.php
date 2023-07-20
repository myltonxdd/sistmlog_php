<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/tailwind.css" rel="stylesheet">
    <title>Miniproyecto 3</title>
</head>
<body>
    <h1 class="">Sing-up</h1>
    <form class="" action="metodo_get.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" />
        <br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="email" />
        <br>

        <label for="pasword">Constraseña:</label>
        <input type="password" id="pasword" name="pasword" />
        <br>

        <input type="submit" value="Enviar" />
    </form>

    

</body>
</html>