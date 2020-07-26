<?php
/*
 * Jackie A. Adair
 * CST 236 Week 1
 * Instructor: Todd Wolfe
 * 19 July 2020
 */

class Person
{
    private $personName;
    private $personAge;
    private $username;
    private $password;
    
    public function __construct($name, $age, $uname, $pswd)
    {
        echo "My name is " . $name . "<br />";
        $this->personName = $name;
        $this->personAge = $age;
        $this->username = $uname;
        $this->password = $pswd;
    }
    
    public function brushTeeth($time)
    {
        echo $this->personName . " is brushing their teeth for " . $time . " minutes! <br />";
    }
    
    public function exercise($type)
    {
        echo $this->personName . " is doing " . $type . " right now! <br />";
    }
    
    public function login($usrname, $pass)
    {
        if ($usrname == $this->username && $pass == $this->password)
        {
            echo $this->personName . " logged in.  Welcome! <br />";
        }
        else 
        {
            echo "That is a bad username or password for " . $this->personName . "<br />";  
        }
    }
    
    
}

