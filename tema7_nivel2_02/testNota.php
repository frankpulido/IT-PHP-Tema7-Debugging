<?php
declare(strict_types = 1);
require "nota.php";
class TestNota {
    private $data = [];
    public function __construct() {
        $this->data = $this->addDataProvider();
    }
    public function inRange() : array {
        $gradesKeys = $this->data;
        $gradesTest = [];
        foreach($gradesKeys as $value) {
            $gradesTest[] = ($value >= 0 && $value <= 100);
        }
        $test = array_combine($gradesKeys, $gradesTest);
        return $test;
    }
    public function grade(): array {
        $gradesKeys = $this->data;
        $gradesTest = [];
        foreach($gradesKeys as $value) {
            if ($value < 0) {$gradesTest[] = "out of range : lower than 0";}
            elseif ($value < 33) {$gradesTest[] = "grade range [0 - 32], both inclusive";}
            elseif ($value < 45){$gradesTest[] = "grade range [33 - 44], both inclusive";}
            elseif ($value < 60){$gradesTest[] = "grade range [45 - 59], both inclusive";}
            elseif ($value <= 100) {$gradesTest[] = "grade range [60 - 100], both inclusive";}
            else {$gradesTest[] = "out of range - exceeds 100";}
        }
        $test = array_combine($gradesKeys, $gradesTest);
        return $test;
    }
    public function addDataProvider() : array {
        return [-1, 0, 32, 33, 44, 45, 59, 60, 100, 101];
    }
}
?>