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

function validarEmail($email){
    $patron = "/^[a-zA-Z0-9]{3,}\b@[a-zA-Z0-9]{3,}\b.[a-zA-Z0-9]{3,}$/";
    if (preg_match($patron, $email)){
        return true;
    } else {
        return false;
    }
}

function validarSexo($sexo){
    if($sexo == 'M' || $sexo == 'F'){
        return true;
    } else {
        return false;
    }
}

function validarFechaNacimiento($fecha_nac){
    $array_fecha = explode('/', $fecha_nac, 3);
    if(count($array_fecha) == 3) {
        if (strlen($array_fecha[0]) == 2 && 0 <= $array_fecha[0] && $array_fecha[0] <= 31) {
            if (strlen($array_fecha[1]) == 2 && 1 <= $array_fecha[1] && $array_fecha[1] <= 12) {
                if (strlen($array_fecha[2]) == 4 && 1900 <= $array_fecha[2] && $array_fecha[2] <= 2020){
                    return true;
                }else return false;
            }else return false;
        }else return false;
    }else return false;
}
