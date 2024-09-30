<?php
declare(strict_types = 1);
require "numberChecker.php";

/*
En este ejercicio hago la prueba con un único valor : 2
En el ejercicio del tema7_nivel2_01 usaremos un dataprovider
*/

class NumberCheckerTest extends \PHPUnit\Framework\TestCase{
    public function testIsEven() {
        $test = new NumberChecker(2);
		//$this->assertEquals(true, $test->isEven());
		$this->assertTrue($test->isEven());
	}
	public function testIsPositive() {
        $test = new NumberChecker(2);
		//$this->assertEquals(true, $test->isPositive());
		$this->assertTrue($test->isPositive());
	}
}
?>