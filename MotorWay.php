<?php
require_once 'Highway.php';
final class MotorWay extends Highway
{
    /**
     * @var integer
     */
    protected $nbLane = 4;

    /**
     * @var integer
     */
    protected $maxSpeed = 130;

    public function addVehicule(Vehicle $vehicle)
    {
        if($vehicle instanceof Car) {

            $this->setCurrentVehicules($vehicle);
        }
    }
}