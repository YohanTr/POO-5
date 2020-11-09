<?php

// Truck.php
require_once 'Vehicle.php';
    class Truck extends Vehicle
    {
        /**
         * @var integer
         */
        protected $sizeStockage;

        /**
         * @var integer
         */
        protected $currentStock = 0;

        public function __construct(int $sizeStockage, string $color, int $nbSeats)
        {
            parent::__construct($color, $nbSeats);
            $this->sizeStockage = $sizeStockage;
            $this->color = $color;
            $this->nbSeats = $nbSeats;
        }
        public function getSizeStockage(): int
        {
            return $this->sizeStockage;
        }

        public function setSizeStockage(): void
        {
            $this->sizeStockage = $sizeStockage;
        }
        public function getCurrentStock(): int
        {
            return $this->currentStock;
        }
        public function setCurrentStock (int $currentStock): void
        {
            $this->currentStock = $currentStock;
            if ($this->currentStock > $this->sizeStockage) {
                $this->currentStock = $this->sizeStockage;
            }
        }
        public function filling() : string
        {
            if ($this->currentStock == $this->sizeStockage) {
                return "full";
            } else {
                return "in filling";
            }
        }

    }

