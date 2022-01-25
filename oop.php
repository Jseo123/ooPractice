<?php
//interface part
interface explosiveRockets{
    public function explode();
    public function returnName();
}

// Parent class
class Rocket
{
    public $name;
    public $fuelCapacity;
    public $thrust;

    public function __construct($name, $fuelCapacity, $thrust)
    {
        $this->name = $name;
        $this->fuelCapacity = $fuelCapacity;
        $this->thrust = $thrust;


        echo "The  " . $this->name . " rocket, is an amazing one with a fuel capacity of " .
            $this->fuelCapacity . " litres and " . $this->thrust . "kN";
    }

    public function nameReturn(){
        return $this->name;
    }

    public function fuelCapacityReturn(){
        return $this->fuelCapacity;
    }
    public function thrustReturn(){
        return $this->thrust;
    }

    function __destruct()
    {
        echo "<br>The " .  $this->name . " rocket has crashed and burned";
    }
}

$falcon = new Rocket("Falcon", "200000", "8000");
// inherithed class
class Reusable extends Rocket
{
  public static $landingMethod = "retro-thrusters";
  
  public function nameReturn()
  {
      return $this->name . " rocket";
  }
}

// Abstract class
abstract class SecretMissiles implements explosiveRockets
{
    public $name;
    public $explosiveLoad;

    public function explode(){
        return $this->explosiveLoad . " tons of TNT delivered. Your dooms is near.";
    }

    public function returnName(){
        return $this->name;
    }
}



