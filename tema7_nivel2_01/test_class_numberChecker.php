<?php
declare(strict_types=1);
require "numberChecker.php";

class TestNumberChecker {
    private $data = [];
    public function __construct(){
        $this->data = $this->addDataProvider();
    }
    public function testNumberChecker() : array {
        $test = [];
        $numbers = $this->data;
        foreach($numbers as $value) {
            $number = new NumberChecker($value);
            $testEven = $number->isEven();
            $testPositive = $number->isPositive();
            $test ["$value"] = [$testEven, $testPositive]; // Importante : "$key" entrecomillada !!!... Debo usar $value porque $number es un objeto
        }
        return $test;
    }
    public function addDataProvider() : array {
        return [-5, -4.5, -4, -1, 0, 1, 4, 4.5, 5];
    }
}
?>