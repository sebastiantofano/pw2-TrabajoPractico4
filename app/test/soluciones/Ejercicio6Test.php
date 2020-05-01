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

    public function test_valida_email_correcto(){
        $email = "sebastian@gmail.com";
        $resultado = validarEmail($email);
        $this->assertTrue($resultado);
    }

    public function test_valida_email_incorrecto(){
        $email1 = "se@gmail.com";
        $email2 = "seba@g.com";
        $email3 = "seba@gmail.co";

        $resultado1 = validarEmail($email1);
        $resultado2 = validarEmail($email2);
        $resultado3 = validarEmail($email3);

        $this->assertFalse($resultado1);
        $this->assertFalse($resultado2);
        $this->assertFalse($resultado3);
    }

    public function test_valida_sexo_correcto(){
        $sexoM = "M";
        $sexoF = 'F';
        $resultadoM = validarSexo($sexoM);
        $resultadoF = validarSexo($sexoF);
        $this->assertTrue($resultadoM);
        $this->assertTrue($resultadoF);
    }

    public function test_valida_sexo_incorrecto(){
        $sexo = "O";
        $resultado = validarSexo($sexo);
        $this->assertFalse($resultado);
    }

    public function test_valida_fecha_nacimiento_correcta(){
        $fecha_nac = "09/12/1995";
        $resultado = validarFechaNacimiento($fecha_nac);
        $this->assertTrue($resultado);
    }

    public function test_valida_fecha_nacimiento_incorrecta(){
        $fecha_nac = "44/12/1995";
        $resultado = validarFechaNacimiento($fecha_nac);
        $this->assertFalse($resultado);
    }

}




