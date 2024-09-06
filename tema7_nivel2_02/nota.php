<?php
declare(strict_types = 1);

class Nota {
    private $grade;
    public function __construct(int $grade) {
        $this->grade = $grade;
    }
    public function gradeRange() {
        switch ($this->grade) {
            case ($this->grade >= 0 && $this->grade <= 32) :
                return "";
                break;
            case ($this->grade >= 33 && $this->grade <= 44) :
                return "";
                break;
            case ($this->grade >= 45 && $this->grade <= 59) :
                return "";
                break;
            case ($this->grade >= 60 && $this->grade<=100) :
                return "";
                break;
            default :
                return "Grades cannot be either lower than 0 or larger than 100";
                break;
        }
    }
}
?>