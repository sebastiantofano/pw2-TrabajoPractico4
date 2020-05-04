<?php
    include_once "./solucionEjercicio6.php";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Página Registro</title>
</head>
<style>
    .contenedor{
        width: 80%;
        margin: auto;
        line-height: 20px;
    }
    .color-red{
        color: red;
    }
</style>
<body>
<?php
//   Acceso mediante super variable
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $email = $_POST["email"];
    if(isset($_POST["sexo"])){
        $sexo = $_POST["sexo"];
    } else {
      $sexo = null;
    }

    $fecha_nac = $_POST["fecha_nac"];
    if(isset($_POST["docu_presentada"])){
        $doc_presentada = $_POST["docu_presentada"];
    }else {
        $doc_presentada = ["No se ha seleccionado ningún documento."];
    }


//    Validaciones
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

?>

<div class="contenedor">
    <!--    --><?php
    //        echo "<p>El nombre es: $nombre</p>";
    //        echo "<p>El apellido es: $apellido</p>";
    //        echo "<p>El D.N.I es: $dni</p>";
    //        echo "<p>El email es: $email</p>";
    //        echo "<p>El sexo es: $sexo</p>";
    //        echo "<p>La fecha de nacimiento es: $fecha_nac</p>";
    //        echo "<p>La documentación presentada es: </p>";
    //        if (!is_null($doc_presentada)) {
    //            foreach ($doc_presentada as $documento) {
    //                echo " - $documento<br />";
    //            }
    //        }
    //          ?>
    <!--Utilizando diferentes etiquetas de php-->
        <p><strong>El nombre es: </strong><?php echo $nombre?></p>
        <p><strong>El apellido es: </strong><?php echo $apellido?></p>
        <p><strong>El D.N.I es: </strong><?php echo $dni?></p>
        <p><strong>El email es: </strong><?php echo $email?></p>
        <p><strong>El sexo es: </strong> <?= $sexo?></p>
        <p><strong>La fecha de nacimiento es: </strong><?= $fecha_nac?></p>
        <p><strong>La documentación presentada es: </strong></p>
        <?php
            if (!is_null($doc_presentada)) {
                foreach ($doc_presentada as $documento) {
                    echo "<li>$documento</li><br />";
                }
            }
        ?>

    <div class="color-red">
        <?php
            //    Mostrar el array de errores
            echo "<p><strong>Errores en el formulario: </strong></p>";
            foreach($errores as $error){
                echo "<p>- $error</p>";
            }
        ?>
    </div>
</div>



</body>
</html>