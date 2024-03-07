<?php
include "calculator.php";

use PHPUnit\Framework\TestCase;

class calculartortest extends TestCase {
    private $calculartor;

    public function setUp():void {
        $this->calculartor = new calculator();
    }

    public function testMultiply(){
        $this->assertEquals(4,$this->calculartor->Multiply(4,1));
    }

    public function testAdd(){
        $this->assertEquals(5, $this->calculartor->Add(4, 1));
    }

    public function testSubtract(){
        $this->assertEquals(3, $this->calculartor->Subtract(4, 1));
    }
}