<?php

class FactorialTest extends PHPUnit\framework\TestCase{

    public static function setupBeforeClass() : void {

    }

    public static function tearDownAfterClass() : void {

    }

    public function setup() : void{
            $this->factoria = new Factorial();
    }

    public function test_factorial_0_is_1(){

        $this->assertTrue($this->factoria-> getfactorial(0) == 1) ;
    }

    public function test_factorial_1_is_1(){
        $this->assertTrue($this->factoria->getfactorial(1)== 1);
    }

    public function test_factorial_4_is_24(){
        $this->assertTrue($this->factoria->getfactorial(4) == 24);
    }

    public function test_factorial_ABC_is_Null(){
        $this->assertTrue($this->factoria->getfactorial("xyz") == null);
    }

}
