<?php
use PHPUnit\Framework\TestCase;
include_once './soluciones.php';

class Ejercicio1Test extends TestCase{

    public function test_devuelve_buenos_dias_ante_11hs(){
        $resultado = solucionEjercicio1(11);
        $this->assertEquals( "Buenos días!", $resultado);
    }

    public function test_devuelve_buenas_tardes_ante_16hs(){
        $resultado = solucionEjercicio1(17);
        $this->assertEquals( "Buenas tardes!", $resultado);
    }

    public function test_devuelve_buenas_noches_ante_23hs(){
        $resultado = solucionEjercicio1(23);
        $this->assertEquals( "Buenas noches!", $resultado);
    }

    public function test_devuelve_error_ante_rango_invalido(){
        //deberan validar el rango horario hasta 24.Si, el enunciado no lo avisaba
        $resultado = solucionEjercicio1(25);
        $this->assertEquals( "Error, hora inválida", $resultado);
    }
}