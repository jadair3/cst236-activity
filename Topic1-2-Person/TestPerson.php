<?php
    require_once "Person.php";
    
    $james = new Person("James", "23", "James", "James1");
    $james->brushTeeth(3);
    $james->exercise("pushups");
    $james->login("james213","james");
    $james->login("James","James1");
    echo "<hr>";
    
    $megan = new Person("Megan", "23", "Megan", "Megan1");
    $megan->brushTeeth(3);
    $megan->exercise("situps");
    $megan->login("megan213","megan");
    $megan->login("Megan","Megan1");
    echo "<hr>";
    
    $bailey = new Person("Bailey", "23", "Bailey", "Bailey1");
    $bailey->brushTeeth(3);
    $bailey->exercise("nothing because she's being lazy");
    $bailey->login("bailey213","bailey");
    $bailey->login("Bailey","Bailey1");
    echo "<hr>";
    
?>