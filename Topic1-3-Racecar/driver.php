<?php
require_once "Racecar.php";

    $number3 = new Racecar("Number 3");
    echo "<hr width=300 align=left>";
    $number3->StartCar();
    echo "<hr width=300 align=left>";
    $number3->StartCar();
    echo "<hr width=300 align=left>";
    $number3->CurrentSpeed();
    echo "<hr width=300 align=left>";
    $number3->Accelerate(45);
    echo "<hr width=300 align=left>";
    $number3->Accelerate(30);
    echo "<hr width=300 align=left>";
    $number3->Decelerate(70);
    echo "<hr width=300 align=left>";
    $number3->Stop();
    echo "<hr width=300 align=left>";
    $number3->Accelerate(312);
    echo "<hr width=300 align=left>";
    $number3->ShutdownCar();
    echo "<hr width=300 align=left>";
    $number3->StartCar();
    echo "<hr width=300 align=left>";
    $number3->Decelerate(33);
    echo "<hr width=300 align=left>";
    $number3->ShutdownCar();
    echo "<hr width=300 align=left>";


?>