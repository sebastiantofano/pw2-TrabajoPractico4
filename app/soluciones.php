<?php

function solucionEjercicio1($hora){
    if($hora >= 0 && $hora <= 24){
        if ($hora >= 7 && $hora <= 12) {
            return "Buenos días!";
        } elseif ($hora >= 12 && $hora <= 20) {
            return "Buenas tardes!";
        } else {
        return "Buenas noches!";
        }
    }else {
        return "Error, hora inválida";
    }
}

function solucionEjercicio2($hora){
    if($hora >= 0 && $hora <= 24){
        if ($hora >= 7 && $hora <= 12) {
            return "images/buenosdias.jpg";
        } elseif ($hora >= 12 && $hora <= 20) {
            return "images/buenastardes.jpg";
        } else {
            return "images/buenasnoches.jpeg";
        }
    }else {
        return "images/saludo.jpg";
    }
}

function solucionEjercicio3($mascota){
//    Uso de tabla
    $mascotas = [
        "perro" => ["posicion" => 1, "nombre" => "Titan"],
        "gato" => ["posicion" => 2, "nombre" => "Galileo"],
        "serpiente" => ["posicion" => 3, "nombre" => "Liopis"],
        "caballo"=> ["posicion" => 4, "nombre" => "Porteña"]
    ];
   /* if($mascota == "perro")
        return $mascotas["perro"];
    elseif($mascota == "gato"){
        return $mascotas["gato"];
    }elseif($mascota == "serpiente"){
        return $mascotas["serpiente"];
    }elseif($mascota == "caballo"){
        return $mascotas["caballo"];
    }*/
    switch ($mascota){
        case "perro": return $mascotas["perro"];
        case "gato": return $mascotas ["gato"];
        case "serpiente": return $mascotas["serpiente"];
        case "caballo": return $mascotas["caballo"];
        default: return "No existe el animal en el array.";
    }
}

function solucionEjercicio4($cosas){
    $array_inv = [];
    $j = count($cosas)-1;
    for ($i = 0; $i <= count($cosas)-1; $i++) {
            /*El contador j recorre en orden inverso el array*/
            $array_inv[$i] = $cosas[$j];
            $j--;
        }
    return $array_inv;
}

function solucionEjercicio5($valores){
//    Solución con función
//    $maximo = max($valores);
//    return $maximo;

//    Solución con condicional
    $mayor = null;
    for($i = 0; $i < count($valores)-1; $i++){
        if ( $valores[$i] > $mayor){
            $mayor = $valores[$i];
        }
    }
    return $mayor;
}





?>