<?php
declare(strict_types = 1);
// Será array con los $keys (asignaturas) a los que serán asignados sus respectivos $values ($notas) y se combinarán en array asociativo (array_combine)
// No es necesario ningún require "file.ext";
class CursoLectivo {
    private $courses; // Los estudiantes tienen la libertad de tomar clases distintas como en Cibernarium

    function __construct(array $courses) {
        $this->courses = $courses;
    }
    public function grading() {
        $totalCourses = count($this->courses);
        for ($i = 0; $i < $totalCourses; $i++) {
            $grades [] = readline("Name of course " . ($i + 1) . " : ");
        }
        $coursesGraded = array_combine($this->courses, $grades);
        return $coursesGraded;
    }
}
?>