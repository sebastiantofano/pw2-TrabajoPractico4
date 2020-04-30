<?php
    include_once "./solucionEjercicio6.php";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Registro</title>
</head>
<body>
<?php
//   Acceso mediante super variable
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];

//    Array que guardará los errores.
    $errores = [];

//   Valida que el nombre contenga entre 5 y 10 caracteres
    if ( !(validarNombre($nombre)) ){
        $errores[] = "El campo nombre es incorrecto. Debe contener entre 5 y 10 caracteres.";
    }

//   Valida que el apellido contenga entre 3 y 10 caracteres
    if ( !(validarApellido($apellido)) ){
        $errores[] = "El campo apellido es incorrecto. Debe contener entre 3 y 10 caracteres.";
    }

//   Valida que el dni tenga 8 dígitos
    if ( !(validarDni($dni)) ){
        $errores[] = "El campo D.N.I es incorrecto. Debe contener 8 dígitos.";
    }

    echo "<p>El nombre es: $nombre</p>";
    echo "<p>El apellido es: $apellido</p>";
    echo "<p>El D.N.I es: $dni<p/>";

    foreach($errores as $error){
        echo "<br />$error";
    }
//




?>


</body>
</html>