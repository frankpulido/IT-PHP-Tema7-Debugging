<?php

declare (strict_types = 1);

use PHPUnit\Framework\Attributes\DataProvider;

require "numberChecker2.php";

class NumberChecker2Test extends \PHPUnit\Framework\TestCase {
   
    
    #[DataProvider ('provideEvenData')]
    
    public function testIsEven(bool $expected, float $value) {
        $testCase = new NumberChecker2($value);
        $this->assertEquals($expected, $testCase->isEven());
    }

    #[DataProvider ('providePositiveData')]

    public function testIsPositive(bool $expected, float $value) {
        // Zero is not considered "positive" : 
        $testCase = new NumberChecker2($value);            
        $test_results = $this->assertEquals($expected, $testCase->isPositive());
    }

    public static function provideEvenData() : Generator {
        yield [false, -5];
        yield [false, -4.5];
        yield [true, -4];
        yield [false, -1];
        yield [true, 0];
        yield [false, 1];
        yield [true, 4];
        yield [false, 4.5];
        yield [false, 5];
    }

    public static function providePositiveData() : Generator {
        yield [false, -1];
        yield [false, -0.5];
        yield [false, 0];
        yield [true, 0.5];
        yield [true, 1];
    }

}

?>