<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest  extends TestCase
{
    public function testSuma()
    {   
        $calculadora = new Calculadora();

        $resultado = $calculadora->suma(5,5);

        $this->assertEquals($resultado , 10 );
    }
 }
?>