<?php
function validarNombre($nombre){
    if (strlen($nombre) >= 5 && strlen($nombre) <= 10 ){
        return true;
    } else {
        return false;
    }
}

function validarApellido($apellido){
    if (strlen($apellido) >= 3 && strlen($apellido) <= 10){
        return true;
    } else {
        return false;
    }
}

function validarDni($dni){
    if (is_numeric($dni) && strlen($dni) == 8){
        return true;
    }else {
        return false;
    }
}


