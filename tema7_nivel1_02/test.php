<?php
declare(strict_types=1);
//require "tests/test_Nota.php";
require __DIR__ . '/tests/test_Nota.php';

// Haremos un test unitario de la nota

echo "Rubén, haré la entrega con el Tema 7 incompleto o quizás SIN HABER PROBAR FUNCIONAMIENTO, los require() me han dejado de funcionar SIN HABER MODIFICADO php.ini\n";
echo "No entiendo nada, el fallo me ocurrió hoy viernes 6/Sep por la tarde SIN haber intentado instalar nada durante todo el día. Quizás al instalar COMPOSER ayer se modificó php.ini???\n\n";
echo "ERROR :\n";
echo "PHP Fatal error:  Uncaught Error: Failed opening required '../classes/nota.php' (include_path='.:/usr/local/Cellar/php/8.3.11/share/php/pear')\n";
echo " in /Users/frankpulidoalvarez/Documents/FORMACIÓN/* IT ACADEMY/PHP_FULL_STACK/sprint1_tema7_debugging/tema7_nivel1_02/tests/test_Nota.php:3\n";
echo "Stack trace:\n";
echo "#0 /Users/frankpulidoalvarez/Documents/FORMACIÓN/* IT ACADEMY/PHP_FULL_STACK/sprint1_tema7_debugging/tema7_nivel1_02/test.php(4): require()\n";
echo "#1 {main} thrown in /Users/frankpulidoalvarez/Documents/FORMACIÓN/* IT ACADEMY/PHP_FULL_STACK/sprint1_tema7_debugging/tema7_nivel1_02/tests/test_Nota.php on line 3\n";

do {
    $input = (int) readline("Indique nota a testar (entero del 0 al 100) : ");
    $grade = new TestNota($input);
    $inRange = $grade->inRange();
    $gradeString = $grade->grade();
    var_dump($inRange);
    var_dump($gradeString);
    $continueTesting = (int) readline("Continuar test con nueva nota : [1] Continuar : [0] : No/Salir");
} while($continueTesting != 0);

?>