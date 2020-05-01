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
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $fecha_nac = $_POST["fecha_nac"];
    $doc_presentada = $_POST["docu_presentada"];

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

//    Valida que el email contenga al menos 3 letras o números en sus 3 partes.
    if ( !(validarEmail($email)) ){
        $errores[] = "El campo email es incorrecto. Debe contener al menos 3 letras o números en sus 3 partes.";
    }

    if ( !(validarSexo($sexo)) ){
        $errores[] = "El campo de sexo no fue seleccionado.";
    }

    if (!(validarFechaNacimiento($fecha_nac))){
        $errores[] = "El campo de fecha de nacimiento es incorrecto. Debe tener el formato DD/MM/AAAA y estar dentro del rango de años 1900 y 2020.";
    }




    echo "<p>El nombre es: $nombre</p>";
    echo "<p>El apellido es: $apellido</p>";
    echo "<p>El D.N.I es: $dni<p/>";
    echo "<p>El email es: $email</p>";
    echo "<p>El sexo es: $sexo</p>";
    echo "<p>La fecha de nacimiento es: $fecha_nac</p>";

    echo "<p>La documentación presentada es: </p>";
    print_r($doc_presentada);


    foreach($errores as $error){
        echo "<br />$error";
    }
//




?>


</body>
</html>