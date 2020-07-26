<?php

    class Tire
    {
        private $tirePressure;
    
        public function __construct($tp)
        {
            $this->tirePressure = $tp;
        }
        
        public function returnTirePressure()
        {
            return $this->tirePressure;
        }
        
        public function inflateTire($psi)
        {
            $this->tirePressure = $psi;
        }
        
    }

?>
