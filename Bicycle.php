<?php
// Bicycle.php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        if ($this->currentSpeed > 10){
            return true;
        }
    }
    public function switchOff()
    {
        if ($this->currentSpeed <= 10){
            return false;
        }
    }
}