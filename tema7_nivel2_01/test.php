<?php
require "test_class_numberChecker.php";
/*
El TEST no funciona si se mantiene el casting a INTEGER en la Clase numberChecker.
REFACTOR : Modifiqué el constructor y la función isEven().
*/

echo "\n\n";

$test = new TestNumberChecker();
$testResult = $test->testNumberChecker();
var_dump($testResult);

echo "\n\n";

?>