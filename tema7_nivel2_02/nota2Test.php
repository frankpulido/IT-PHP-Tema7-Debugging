<?php
declare (strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;

require "nota2.php";

class Nota2Test extends \PHPUnit\Framework\TestCase{

    #[DataProvider ('provideTestData')]

    public function testGradeRange(string $expected, int $value){
        $grade = new Nota2($value);
        $this->assertEquals($expected, $grade->gradeRange());
    }

    public static function provideTestData() : Generator {
        yield ['Grades cannot be either lower than 0 or larger than 100', -1];
        yield ['Reprobado', 0];
        yield ['Reprobado', 32];
        yield ['Tercera División', 33];
        yield ['Tercera División', 44];
        yield ['Segunda División', 45];
        yield ['Segunda División', 59];
        yield ['Primera División', 60];
        yield ['Primera División', 100];
        yield ['Grades cannot be either lower than 0 or larger than 100', 101];
    }

}

/*
PENDIENTE : Ver como usar $keys para que el output me indique cual es el valor que falla.
return ["-1" => -1, "0" => 0, "32" => 32, "33" => 33, "44" => 44, "45" => 45, "59" => 59, "60" => 60, "100" => 100, "-101" => 101];
*/

?>