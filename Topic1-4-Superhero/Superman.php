<?php
require_once 'SuperHero.php';

class Superman extends SuperHero
{
    
    public function __construct(){
        $this->setName("Superman");
        $this->setHealth(rand(1,1000));
    }
    
}
