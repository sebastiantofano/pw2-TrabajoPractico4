<?php
    session_start();
    error_reporting(0);
    $nombre = $_SESSION["login"];

    echo "El nombre de la sesión es <strong>$nombre</strong>";
    if(!(isset($nombre))){
        echo "Usted no tiene autorizacion para ver la pagina";
        exit();
    }



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceso correcto</title>
</head>
<body>
<h1>Accedió correctamente a la pagina</h1>
<a href="inicio.php">Volver a la pagina anterior</a>
<a href="cerrar-sesion.php">Cerrar Sesión</a>
</body>
</html>
