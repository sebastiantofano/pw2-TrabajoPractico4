<?php
use PHPUnit\Framework\TestCase;
include_once './soluciones.php';

class Ejercicio3Test extends TestCase{

    public function test_devuelve_titan_ante_perro(){
        $resultado = solucionEjercicio3("perro");
        $this->assertEquals( 1, $resultado["posicion"]);
        $this->assertEquals( "Titan", $resultado["nombre"]);
    }

    public function test_devuelve_galileo_ante_gato(){
        $resultado = solucionEjercicio3("gato");
        $this->assertEquals( 2, $resultado["posicion"]);
        $this->assertEquals( "Galileo", $resultado["nombre"]);
    }

    public function test_devuelve_liopis_ante_serpiente(){
        $resultado = solucionEjercicio3("serpiente");
        $this->assertEquals( 3, $resultado["posicion"]);
        $this->assertEquals( "Liopis", $resultado["nombre"]);
    }

    public function test_devuelve_portena_ante_caballo(){
        $resultado = solucionEjercicio3("caballo");
        $this->assertEquals( 4, $resultado["posicion"]);
        $this->assertEquals( "Porteña", $resultado["nombre"]);
    }

}