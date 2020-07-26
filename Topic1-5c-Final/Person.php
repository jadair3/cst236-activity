<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Person{
    public $name;
    public $age;
    
    final public function growOlderBy($year){
        $this->age = $this->age + $year;
    }
}

