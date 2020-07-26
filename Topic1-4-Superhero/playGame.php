<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Batman.php';
require_once 'Superman.php';

$batman = new Batman();
$superman = new Superman();

while($batman->getIsDead() == false && $superman->getIsDead() == false){
    echo $batman->getName() . ": " . $batman->getHealth() . " | " . $superman->getName() . ": " . $superman->getHealth() . " ::: ";
    if($superman->getIsDead() == false){
        echo $superman->getName() . " hits for " . $superman->Attack($batman) . " damage. | ";
    }

    if($batman->getIsDead() == false){
        echo $batman->getName() . " hits for " . $batman->Attack($superman) . " damage. <hr width=300 align=left>";
    }
    
}
if($batman->getIsDead() == true && $superman->getIsDead() == false){
    echo "<hr width=300 align=left> " . $batman->getName() . " is Dead. " . $superman->getName() . " WINS!!";
}
else if($superman->getIsDead() == true && $batman->getIsDead() == false){
    echo "<hr width=300 align=left> " . $superman->getName() . " is Dead. " . $batman->getName() . " WINS!!";
}
else {
    echo "Both are dead...";
}
/*

$batman = new SuperHero('Batman');
$superman = new SuperHero('Superman');

while ($batman->isHeDead() == "Alive" && $superman->isHeDead() == "Alive") {
    echo $batman->returnName() . ": " . $batman->getHealth() . " | " . $superman->returnName() . ": " . $superman->getHealth() . " ::: ";
    $player1Damage = $batman->attack($superman);
    echo $batman->returnName() . " hits " . $superman->returnName() . " for " . $player1Damage . " | ";
    $player2Damage = $superman->attack($batman);
    echo $superman->returnName() . " hits " . $batman->returnName() . " for " . $player2Damage . "<hr width=300 align=left>";
}

echo $batman->returnName() . ": " . $batman->getHealth() . " | " . $superman->returnName() . ": " . $superman->getHealth() . "<br>";
if($batman->isHeDead() == "Dead" && $superman->isHeDead() == "Alive"){
    echo $batman->returnName() . " has DIED! " . $superman->returnName() . " WINS!!!";
}
else if($batman->isHeDead() == "Alive" && $superman->isHeDead() == "Dead"){
    echo $superman->returnName() . " has DIED! " . $batman->returnName() . " WINS!!!";
}
else{
    echo "I guess its a DRAW!";
}
*/

?>