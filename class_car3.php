<?php

declare( strict_types=1 );

class Car {

  private int $wheels = 4;
  private int $hood = 1;
  private int $engine = 1;
  private int $doors = 4;

  public function __construct() {
    
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