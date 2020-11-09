<?php
require_once 'Highway.php';
final class PedestrianWay extends Highway
{
    /**
     * @var integer
     */
    protected $nbLane = 1;

    /**
     * @var integer
     */
    protected $maxSpeed = 10;

    public function addVehicule(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skate) {

            $this->setCurrentVehicules($vehicle);
        }
    }
}