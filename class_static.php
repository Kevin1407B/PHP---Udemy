<?php

declare( strict_types=1 );

class Car {

  private int $wheels = 4;
  private int $hood = 1;
  private int $engine = 1;
  private int $doors = 4;

  public function __construct() {
    
  }

  static function moveWheels() {
    echo "Wheels move";
  }

  public function setWheels(int $wheels) {
    $this -> wheels = $wheels;
  }

  public function getWheels() :int {
    return $this -> wheels;
  }

}

Car :: moveWheels();
