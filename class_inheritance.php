<?php

declare( strict_types=1 );

class Car {

  private int $wheels;
  private int $hood;
  private int $engine;
  private int $doors;

  public function __construct($wheels, $doors) {
    $this -> wheels = $wheels;
    $this -> doors = $doors;
  }

  public function moveWheels() {
    echo "Wheels move";
  }

  public function setWheels(int $wheels) {
    $this -> wheels = $wheels;
  }

  public function getWheels() :int {
    return $this -> wheels;
  }

}

$volvo = new Car();

$volvo -> moveWheels();
echo "<br>";
echo $volvo -> getWheels();
echo "<br>";
$volvo -> setWheels(5);
echo $volvo -> getWheels();
echo "<br>";

class Truck extends Car {



}

$man = new Truck();
echo $man -> getWheels();
