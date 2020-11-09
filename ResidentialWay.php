<?php
require_once 'Highway.php';
final class ResidentialWay extends Highway
{
    /**
     * @var integer
     */
    protected $nbLane = 2;

    /**
     * @var integer
     */
    protected $maxSpeed = 50;

    function addVehicule(\Vehicle $vehicle)
        {
            if($vehicle instanceof Vehicle) {

                $this->setCurrentVehicules($vehicle);
            }
        }
}

