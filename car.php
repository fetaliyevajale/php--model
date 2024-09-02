<?php

class car {
    public $car;
    public function __construct($car)
    {
        $this->car= $car;
    }

    public function showCar() {
        echo "The car is driving";
    }
}

?>