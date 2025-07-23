<?php


interface VehicleInterface {
    public function startEngine();
    public function stopEngine();
}

class Vehicle {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }
}

class Car extends Vehicle implements VehicleInterface {
    private $model;

    public function __construct($brand, $model) {
        parent::__construct($brand);
        $this->model = $model;
    }

    public function startEngine() {
        echo "Starting engine of {$this->brand} {$this->model}";
    }

    public function stopEngine() {
        echo "Stopping engine of {$this->brand} {$this->model}";
    }

    public function getModel() {
        return $this->model;
    }
}

$car = new Car("Toyota", "Corolla");
echo "Brand: " . $car->getBrand() ;
echo "Model: " . $car->getModel() ;
$car->startEngine();
$car->stopEngine();

?>
