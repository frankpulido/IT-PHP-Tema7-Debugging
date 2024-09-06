<?php
declare(strict_types = 1);
require "nota.php";
require "cursoLectivo.php";

class Student {
    private $name;
    private $studentCourses;

    public function __construct(string $name, array $studentCourses) {
        $this->name = $name;
        $this->studentCourses = $studentCourses;
    }

    public function getName() : string {
        return $this->name;
    }
    public function getCourses() : array {
        return $this->studentCourses;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setCourses($studentCourses) {
        $this->studentCourses = $studentCourses;
    }
    public function isGraded() : string {
        $counter = 0;
        $totalCourses = count($this->studentCourses);
        foreach ($this->studentCourses as $key => $value) {
            if (is_int($value)) {$counter++;}
        }
        return ($counter++ == $totalCourses)? "Todas las asignaturas ($totalCourses) han sido evaluadas." : "Se han evaluado $counter asignaturas de un total de $totalCourses.";
    }
    public function __toString() {
        return "Estudiante : $this->name.\nTotal de asignaturas en curso : " . count($this->studentCourses) .".\nEstado evaluación : " . $this->isGraded();
    }
}
?>