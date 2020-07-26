<?php


class SuperHero
{
    private $name;
    private $health;
    private $isDead;

    /**
     * @return boolean
     */
    public function getIsDead()
    {
        return $this->isDead;
    }

    /**
     * @param boolean $isDead
     */
    public function setIsDead($isDead)
    {
        $this->isDead = $isDead;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer <number, unknown>
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param Ambigous <number, unknown> $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function __construct($n, $h){
        $this->personName = $n;
        $this->health = $h;
        if($this->health <= 0){
            $this->isDead = True;
        }
        else{
            $this->isDead = False;
        }
    }
    
    public function CauseDamage($d){
        $this->health = $this->health - $d;
        if($this->health <= 0){
            $this->isDead = true;
        }
    }
    
    public function Attack($e){
        $damage = rand(1,10);
        $e->CauseDamage($damage);
        return $damage;
    }
    

}

