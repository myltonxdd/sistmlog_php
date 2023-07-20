<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo Get y Post</title>
</head>
<body>
    <h1>Log-in</h1>
    <form action="loginbd.php" method="post">

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