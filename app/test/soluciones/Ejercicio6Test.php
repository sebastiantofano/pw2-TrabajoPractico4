<?php
use PHPUnit\Framework\TestCase;
include_once './solucionEjercicio6.php';

class Ejercicio6Test extends TestCase{
    public function test_validar_nombre_correcto(){
        $nombre = "Sebastian";
        $resultado = validarNombre($nombre);
        $this->assertTrue($resultado);
    }

    public function test_validar_nombre_corto(){
        $nombre = "Luca";
        $resultado = validarNombre($nombre);
        $this->assertFalse($resultado);
    }

    public function test_validar_nombre_largo(){
        $nombre = "Guillermina";
        $resultado = validarNombre($nombre);
        $this->assertFalse($resultado);
    }

    public function test_validar_apellido_correcto(){
        $apellido = "Tofano";
        $resultado = validarApellido($apellido);
        $this->assertTrue($resultado);
    }

    public function test_validar_apellido_corto(){
        $apellido = "Yio";
        $resultado = validarNombre($apellido);
        $this->assertFalse($resultado);
    }

    public function test_validar_apellido_largo(){
        $apellido = "Yakinatashamoto";
        $resultado = validarApellido($apellido);
        $this->assertFalse($resultado);
    }

    public function test_validar_dni_8_numeros(){
        $dni = "39271548";
        $resultado = validarDni($dni);
        $this->assertTrue($resultado);
    }

    public function test_validar_dni_corto(){
        $dni = "3927154";
        $resultado = validarDni($dni);
        $this->assertFalse($resultado);
    }

    public function test_validar_dni_largo(){
        $dni = "392715489";
        $resultado = validarDni($dni);
        $this->assertFalse($resultado);
    }

}




