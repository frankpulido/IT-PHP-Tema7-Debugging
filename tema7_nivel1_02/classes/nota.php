<?php
declare(strict_types = 1);

class Nota {
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
    /*
    // SWITCH CASE fallaba con PHP Unit a pesar de funcionar correctamente. He optado por IF-ELSE y ahora pasa el TEST.
    public function gradeRange() {
        switch ($this->grade) {
            case ($this->grade >= 0 && $this->grade <= 32) :
                return "Reprobado";
                break;
            case ($this->grade >= 33 && $this->grade <= 44) :
                return "Tercera División";
                break;
            case ($this->grade >= 45 && $this->grade <= 59) :
                return "Segunda División";
                break;
            case ($this->grade >= 60 && $this->grade<=100) :
                return "Primera División";
                break;
            default :
                return "Grades cannot be either lower than 0 or larger than 100";
                break;
        }
    }
    */
}
?>