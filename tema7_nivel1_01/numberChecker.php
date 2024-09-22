<?php
class NumberChecker  {
	public function __construct(private int $number){}
	//public function __construct(private float $number){} // OPCIONAL : Si EXISTE posibilidad de entrada de datos FLOAT

	public function isEven(): bool {
		return $this->number % 2 == 0;
		//return (fmod($this->number,2) == 0); // OPCIONAL : Si EXISTE posibilidad de entrada de datos FLOAT
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}
}
?>
