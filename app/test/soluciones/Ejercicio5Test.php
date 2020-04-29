<?php
use PHPUnit\Framework\TestCase;
include_once './soluciones.php';

class Ejercicio5Test extends TestCase{

    public function test_devolver_valor_maximo(){
        $valores = array(4,10,3,100,4,2,25,50,-10);
        $maximo = solucionEjercicio5($valores);
        $this->assertEquals( 100, $maximo);
    }

}