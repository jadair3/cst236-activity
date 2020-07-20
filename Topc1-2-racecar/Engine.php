<?php

    class Engine
    {
        private $isRunning;
    
        public function __construct()
        {
            $this->isRunning = false;
        }
        
        public function startEngine()
        {
            $this->isRunning = true;
        }
        
        public function stopEngine()
        {
            $this->isRunning = false;
        }
        
        public function isEngineRunning()
        {
            return $this->isRunning;
        }
    }

?>