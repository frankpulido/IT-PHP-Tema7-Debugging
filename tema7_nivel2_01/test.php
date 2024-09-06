<?php
/*
El TEST no funciona si se mantiene el casting a INTEGER en la Clase numberChecker.
REFACTOR : Modifiqué el constructor y la función isEven().
*/
require "test_class_numberChecker.php";

$test = new TestNumberChecker();
$testResult = $test->testNumberChecker();
var_dump($testResult);
?>