<?php
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testCanBeCreatedFromConstructor(): void{
        $calc =  new Calculator();
        $this->assertInstanceOf(Calculator::Class, $calc);
    }

    public function testAddNumbers(): void{
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(3,2));
    }

    public function testMultiplyNumbers(): void{
        $calc = new Calculator();
        $this->assertEquals(6, $calc->multiply(3,2));
    }

    public function testSubtractNumbers(): void{
        $calc = new Calculator();
        $this->assertEquals(1, $calc->subtract(3,2));
    }
    
        public function testDivideNumbers(): void{
        $calc = new Calculator();
        $this->assertEquals(2, $calc->divide(10,5));
    }

}
