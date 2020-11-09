<?php
// Car.php
    require_once 'Vehicle.php';
    require_once 'LightableInterface.php';

    class Car extends Vehicle implements LightableInterface
    {
        const ALLOWED_ENERGY = [
            'fuel',
            'electric',
        ];
        /**
         * @var string
         */
        private $energy;

        /**
         * @var int
         */
        private $energyLevel;

        /**
         * @var bool
         */
        private $hasParkBrake = true;

        /**
         * @var bool
         */
        private $switch;

        public function __construct(string $color, int $nbSeats, string $energy)
        {
            parent::__construct($color, $nbSeats);
            $this->energy = $energy;
        }

        public function setEnergy(string $energy): Car
        {
            if(in_array($energy, self::ALLOWED_ENERGY)) {
                $this->energy = $energy;
            }
            return $this;
        }

        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

        public function setEnergyLevel(int $energyLevel): void
        {
            $this->energyLevel = $energyLevel;
        }
        public function setParkBrake(bool $hasParkBrake): void
        {
            $this->hasParkBrake = $hasParkBrake;
        }
        public function getHasParkBrake()
        {
            return $this->hasParkBrake;
        }
        public function start(): string
        {
            if ($this->hasParkBrake == true) {
                throw new Exception("Le frein à main est actif !");
            }
        }
        public function switchOn()
        {
            return true;
        }
        public function switchOff()
        {
            return false;
        }
    }