<?php


require_once "Engine.php";
require_once "Tire.php";

    class Racecar
    {
        // properties
        private $carName;
        private Engine $carEngine;
        private Tire $tire1;
        private Tire $tire2;
        private Tire $tire3;
        private Tire $tire4;
        
        private $speed;
        
        // constructor
        public function __construct($name)
        {
            // initialize properties of newly create objects
            $this->carName = $name;
            $this->carEngine = new Engine();
            $this->tire1 = new Tire(34);
            $this->tire2 = new Tire(35);
            $this->tire3 = new Tire(34);
            $this->tire4 = new Tire(31); // <-- PSI passed here
            $this->speed = 0;
            
            // check for an engine and four tires (ensure they were initialized)
            if($this->carEngine && $this->tire1 && $this->tire2 && $this->tire3 && $this->tire4)
            {
                echo $this->carName . " has an engine and 4 tires.<br />";
            }
            else
            {
                echo "Oops!  Something is missing from " . $this->carName . "<br />";
            }
        }
        
        public function StartCar()
        {
            echo "<b><u>Command Received: Start The Engine</b></u><br />";
            
            // Don't start the engine if it is already running.
            // this generally causes a severe grinding as the starter
            // is engaged into an already running flywheel!
            if($this->carEngine->isEngineRunning())
            {
                echo "The engine is already running.<br />";
            }
            else 
            {
                // start a tire pressure check of each tire. 32 PSI is the minimum.(passed at object creation)
                echo "Performing tire pressure check: <br />";
                if($this->tire1->returnTirePressure()>=32)  // if it is good, display   
                {
                    echo "Tire 1 pressure:<font color=Green> OK (" . $this->tire1->returnTirePressure() . " PSI) <font color=Black>| ";
                }
                else  // if it is low display, inflate
                {
                    echo "Tire 1 pressure:<font color=Red> LOW (" . $this->tire1->returnTirePressure() . " PSI) <font color=Black>| Inflating | ";
                    $this->tire1->inflateTire(32);
                    echo "Tire 1 pressure:<font color=Green> OK (" . $this->tire1->returnTirePressure() . " PSI) <font color=Black>| ";
                }
                if($this->tire2->returnTirePressure()>=32)
                {
                    echo "Tire 2 pressure:<font color=Green> OK (" . $this->tire2->returnTirePressure() . " PSI) <font color=Black>| ";
                }
                else
                {
                    echo "Tire 2 pressure:<font color=Red> LOW (" . $this->tire2->returnTirePressure() . " PSI) <font color=Black>| Inflating | ";
                    $this->tire2->inflateTire(32);
                    echo "Tire 2 pressure:<font color=Green> OK (" . $this->tire2->returnTirePressure() . " PSI) <font color=Black>| ";
                }
                if($this->tire3->returnTirePressure()>=32)
                {
                    echo "Tire 3 pressure:<font color=Green> OK (" . $this->tire3->returnTirePressure() . " PSI) <font color=Black>| ";
                }
                else
                {
                    echo "Tire 3 pressure:<font color=Red> LOW (" . $this->tire3->returnTirePressure() . " PSI) <font color=Black>| Inflating | ";
                    $this->tire3->inflateTire(32);
                    echo "Tire 3 pressure:<font color=Green> OK (" . $this->tire3->returnTirePressure() . " PSI) <font color=Black>| ";
                }
                if($this->tire4->returnTirePressure()>=32)
                {
                    echo "Tire 4 pressure:<font color=Green> OK (" . $this->tire4->returnTirePressure() . " PSI) <font color=Black><br />";
                }
                else
                {
                    echo "Tire 4 pressure:<font color=Red> LOW (" . $this->tire4->returnTirePressure() . " PSI)  <font color=Black>| Inflating | ";
                    $this->tire4->inflateTire(32);
                    echo "Tire 4 pressure:<font color=Green> OK (" . $this->tire4->returnTirePressure() . " PSI) <font color=Black><br />";
                }
                // the startEngine() isn't called until all 4 tires have been checked and inflated if necessary.  There is no failure condition after the checks
                $this->carEngine->startEngine();
                echo $this->carName . "'s engine is running.<br />";
            }
        }
        
        // returns speed and displays 
        public function CurrentSpeed()
        {
            echo "<b><u>Command Received: Display Speed</b></u><br />";
            echo $this->carName . " is traveling at " . $this->speed . " mph.<br />";
        }
        
        // Adds passed value to current speed.
        public function Accelerate($mphIncrease)
        {
            echo "<b><u>Command Received: Accelerate by " . $mphIncrease . "mph</b></u><br />";
            echo $this->carName . "'s current speed is " . $this->speed . ".<br />";
            echo "Accelerating by " . $mphIncrease . "<br />";
            $this->speed = $this->speed + $mphIncrease;
            echo $this->carName . " is now travelling at " . $this->speed . " mph. <br />";
        }
        
        // Subtracts passed value from current speed, if less result is negative, sets speed to 0
        public function Decelerate($mphDecrease)
        {
            echo "<b><u>Command Received: Decelerate by " . $mphDecrease . "mph</b></u><br />";
            echo $this->carName . "'s current speed is " . $this->speed . ".<br />";
            echo "Decelerating by " . $mphDecrease . "<br />";
            $this->speed = $this->speed - $mphDecrease;
            if($this->speed < 0){$this->speed = 0;}
            echo $this->carName . " is now travelling at " . $this->speed . " mph. <br />";
        }
        
        // Sets speed to 0
        public function Stop()
        {
            echo "<b><u>Command Received: Stop Vehicle</b></u><br />";
            echo $this->carName . "'s current speed is " . $this->speed . ".<br />";
            echo "Stopping...<br />";
            $this->speed = 0;
            echo $this->carName . " is now travelling at " . $this->speed . " mph. <br />";
        }
        
        // checks to see if car is stopped, if so, calls stopEngine()
        public function ShutdownCar()
        {
            echo "<b><u>Command Received: Shutdown Engine</b></u><br />";
            if($this->speed > 0)
            {
                echo "Stopping prior to shutting down the engine... <br />";
                $this->speed = 0;
            }
            $this->carEngine->stopEngine();
            echo $this->carName . "'s engine has been shut down <br />";
        }
        
        
        
        
    }
?>
