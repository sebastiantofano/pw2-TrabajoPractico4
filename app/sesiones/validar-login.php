<?php
    session_start();
    $var_sesion = $_POST["nombre"];

    if($var_sesion == "seba" ) {
        $_SESSION["login"] = $var_sesion;
        header("location:acceso-correcto.php");
    }{
        echo "Usuario incorrecto";
    }
?>
