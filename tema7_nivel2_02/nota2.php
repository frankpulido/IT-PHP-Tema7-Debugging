<?php
declare(strict_types = 1);

class Nota2 {
    private $grade;
    public function __construct(int $grade) {
        $this->grade = $grade;
    }
    public function gradeRange() : string {
        if ($this->grade < 0) {return "Grades cannot be either lower than 0 or larger than 100";}
        elseif ($this->grade <= 32) {return "Reprobado";}
        elseif ($this->grade <= 44) {return "Tercera División";}
        elseif ($this->grade <= 59) {return "Segunda División";}
        elseif ($this->grade <= 100) {return "Primera División";}
        else {return "Grades cannot be either lower than 0 or larger than 100";}
    }
}
?>