<?php

class Car {
	public $model;
	
	public function getModel()
	{
		return "The car model is " . $this -> model;
	}
}

$mercedes = new Car();
$mercedes -> model = "Mercedes Benz";
echo $mercedes -> getModel();

?>