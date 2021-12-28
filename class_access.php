<?php

declare( strict_types=1 );

class Car {

  private int $wheels = 4;
  protected int $hood = 1;
  public int $engine = 1;
  var int $doors = 4;

  public function __construct() {
    
  }

  public function moveWheels() :string {
    return "Wheels move";
  }

  public function setWheels(int $wheels) {
    $this -> wheels = $wheels;
  }

  public function getWheels() :int {
    return $this -> wheels;
  }

}

class Truck extends Car {
 public function showProperty() {
  echo $this -> wheels;
  echo $this -> doors;
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

$man = new Truck();
echo $man -> showProperty();
echo $man -> showProperty();