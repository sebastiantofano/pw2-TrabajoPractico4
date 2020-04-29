<?php
use PHPUnit\Framework\TestCase;
include_once './soluciones.php';

class Ejercicio2Test extends TestCase{

    public function test_devuelve_buenos_dias_ante_11hs(){
        $resultado = solucionEjercicio2(11);
        $this->assertEquals( "images/buenosdias.jpg", $resultado);
    }

    public function test_devuelve_buenas_tardes_ante_16hs(){
        $resultado = solucionEjercicio2(16);
        $this->assertEquals( "images/buenastardes.jpg", $resultado);
    }

    public function test_devuelve_buenas_noches_ante_23hs(){
        $resultado = solucionEjercicio2(23);
        $this->assertEquals( "images/buenasnoches.jpeg", $resultado);
    }

    public function test_devuelve_saludo_por_defecto_ante_rango_invalido(){
        //deberán crear una imagen de saludo por defecto. Si, el enunciado no lo avisaba :p
        $resultado = solucionEjercicio2(25);
        $this->assertEquals( "images/saludo.jpg", $resultado);
    }
}