<?php
declare (strict_types=1);
require "nota2.php";

class Nota2Test extends \PHPUnit\Framework\TestCase{
    public function testGradeRange(){
        $grades = $this->addDataProvider();
        $expectedResults = ['Grades cannot be either lower than 0 or larger than 100', 'Reprobado', 'Reprobado', 'Tercera División', 'Tercera División', 'Segunda División', 'Segunda División', 'Primera División', 'Primera División', 'Grades cannot be either lower than 0 or larger than 100'];
        for($i = 0; $i < count($grades); $i++) {
            $grade = new Nota2($grades[$i]);
            $this->assertEquals($expectedResults[$i], $grade->gradeRange());
        }
    }
    /* @dataprovider addDataProvider() */
    public function addDataProvider() : array {
        return [-1, 0, 32, 33, 44, 45, 59, 60, 100, 101];
    }
}

/*
PENDIENTE : Ver como usar $keys para que el output me indique cual es el valor que falla.
return ["-1" => -1, "0" => 0, "32" => 32, "33" => 33, "44" => 44, "45" => 45, "59" => 59, "60" => 60, "100" => 100, "-101" => 101];
*/

?>