<?php
require_once 'SuperHero.php';

class Batman extends SuperHero
{

    public function __construct(){
        $this->setName("Batman");
        $this->setHealth(rand(1,1000));
    }
    
}

