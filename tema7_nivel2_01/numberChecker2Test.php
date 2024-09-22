<?php
declare (strict_types = 1);
require "numberChecker2.php";

class NumberChecker2Test extends \PHPUnit\Framework\TestCase {
    /*
    private $data = [];
    public function __construct() {
        $this->data = $this->addDataProvider();
    }
    */
    public function testIsEven() {
        $numbers = $this->addDataProvider();
        $expectedResults = [false, false, true, false, true, false, true, false, false];
        //$test_results_IsEven = [];
        for ($i = 0; $i < count($numbers); $i++) {
            $number = new NumberChecker2($numbers[$i]);
            //$test_results_IsEven[] = $this->assertEquals($expectedResults[$i], $number->isEven());
            /*
            An error occurred inside PHPUnit.
            Message:  Typed property PHPUnit\Framework\TestCase::$methodName must not be accessed before initialization
            Location: /Users/frankpulidoalvarez/Documents/FORMACIÓN/* IT ACADEMY/PHP_FULL_STACK/sprint1_tema7_debugging/vendor/phpunit/phpunit/src/Framework/TestCase.php:409
            */
            $this->assertEquals($expectedResults[$i], $number->isEven());
        }
    }
    public function testIsPositive() {
        $numbers = $this->addDataProvider();
        $expectedResults = [false, false, false, false, false, true, true, true, true];
        //$test_results_IsPositive = [];
        for ($i = 0; $i < count($numbers); $i++) {
            $number = new NumberChecker2($numbers[$i]);
            //$test_results_IsPositive[] = $this->assertEquals($expectedResults[$i], $number->isPositive());
            /*
            An error occurred inside PHPUnit.
            Message:  Typed property PHPUnit\Framework\TestCase::$methodName must not be accessed before initialization
            Location: /Users/frankpulidoalvarez/Documents/FORMACIÓN/* IT ACADEMY/PHP_FULL_STACK/sprint1_tema7_debugging/vendor/phpunit/phpunit/src/Framework/TestCase.php:409
            */
            $test_results_IsPositive[] = $this->assertEquals($expectedResults[$i], $number->isPositive());
        }
    }
    public function addDataProvider() : array {
        return [-5, -4.5, -4, -1, 0, 1, 4, 4.5, 5];
    }
}
?>