<?php
use PHPUnit\Framework\TestCase;
include_once './soluciones.php';

class Ejercicio4Test extends TestCase{

    public function test_invertir_array(){
        $cosas = array("gato","perro","caballo","pez","tomate", 2, 5.6);
        $cosasInvertidas = array( 5.6, 2, "tomate", "pez", "caballo", "perro", "gato");

        $resultado = solucionEjercicio4($cosas);
        $this->assertEquals( $cosasInvertidas, $resultado);
    }
}