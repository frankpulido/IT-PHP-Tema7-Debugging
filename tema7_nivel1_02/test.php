<?php
declare(strict_types=1);
require "";
//require "classes/nota.php";

// Haremos un test unitario de la nota

do {
    $input = (int) readline("Indique nota a testar : ");
    $grade = new TestNota($input);
    $inRange = $grade->inRange();
    $gradeString = $grade->grade();
    var_dump($inRange);
    var_dump($gradeString);
    $continueTesting = (int) readline("Continuar test con nueva nota : [1] Continuar : [0] : No/Salir");
} while($continueTesting != 0);

?>