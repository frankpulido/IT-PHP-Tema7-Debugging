<?php
declare (strict_types=1);
require "nota.php";

class NotaTest extends \PHPUnit\Framework\TestCase{
    public function testGradeRange(){
        $nota1 = new Nota(-1);
        //$nota2 = new Nota(0);
        $nota3 = new Nota(32);
        $nota4 = new Nota(33);
        $nota5 = new Nota(44);
        $nota6 = new Nota(45);
        $nota7 = new Nota(59);
        $nota8 = new Nota(60);
        $nota9 = new Nota(100);
        $nota10 = new Nota(101);
        $this->assertEquals('Grades cannot be either lower than 0 or larger than 100', $nota1->gradeRange());
        //$this->assertEquals('Reprobado', $nota2->gradeRange());
        $this->assertEquals('Reprobado', $nota3->gradeRange());
        $this->assertEquals('Tercera División', $nota4->gradeRange());
        $this->assertEquals('Tercera División', $nota5->gradeRange());
        $this->assertEquals('Segunda División', $nota6->gradeRange());
        $this->assertEquals('Segunda División', $nota7->gradeRange());
        $this->assertEquals('Primera División', $nota8->gradeRange());
        $this->assertEquals('Primera División', $nota9->gradeRange());
        $this->assertEquals('Grades cannot be either lower than 0 or larger than 100', $nota10->gradeRange());
    }
}
?>