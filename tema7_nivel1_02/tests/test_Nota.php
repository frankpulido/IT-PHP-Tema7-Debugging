<?php
declare(strict_types = 1);
require "../classes/nota.php";
class TestNota {
    private $nota;
    public function __construct($nota) {
        $this->nota = new Nota($nota);
    }
    public function inRange() : bool {return ($this->nota >= 0 && $this->nota <=100);}
    public function grade(): string {
        if ($this->nota < 33) {return "grade range [0 - 32], both inclusive";}
        elseif ($this->nota < 45){return "grade range [33 - 44], both inclusive";}
        elseif ($this->nota < 60){return "grade range [45 - 59], both inclusive";}
        else {return "grade range [60 - 100], both inclusive";}
    }
}

?>