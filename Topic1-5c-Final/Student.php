<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Person.php';

class Student extends Person{
    public function growOlderBy($decade){
        $this->age = $this->age + 10 * $decade;
    }
}

