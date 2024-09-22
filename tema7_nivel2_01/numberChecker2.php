<?php

class NumberChecker2  {

	//public function __construct(private int $number){}
	public function __construct(private float $number){} // Si EXISTE posibilidad de entrada de datos FLOAT

	public function isEven(): bool {
		//return $this->number % 2 == 0;
		return (fmod($this->number,2) == 0); // Si EXISTE posibilidad de entrada de datos FLOAT - El número ZERO se considera par (Wikipedia)
	}
	public function isPositive(): bool {
		return $this->number > 0; // El número ZERO no se considera positivo ni negativo, sino NEUTRO (Wikipedia)
	}

}

?>
