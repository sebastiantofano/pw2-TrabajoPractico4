<?php
session_start();
if (isset($_SESSION["login"])) {
    $nombre = $_SESSION["login"];
    echo "El nombre de la sesion es <strong>$nombre</strong>";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
<h1>Pagína de inico</h1>
<h2>Inicie sesión</h2>

<form action="validar-login.php" method="post">
    Nombre<input type="text" name="nombre"> <br/>
    <p>Debe ingresar con el usuario "seba"</p>
    <input type="submit" value="Iniciar sesión">


</form>
</body>
</html>