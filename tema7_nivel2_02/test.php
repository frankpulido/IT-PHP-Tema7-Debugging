<?php
declare(strict_types=1);
require "testNota.php";

echo "\n\n";
echo "Haremos un test unitario usando un Data Provider en la Clase testNota.\n\n";

$testSample = new TestNota();

$testInRange = $testSample->inRange();
var_dump($testInRange);
echo "\n\n";

$testGrading = $testSample->grade();
var_dump($testGrading);
echo "\n\n";

?>