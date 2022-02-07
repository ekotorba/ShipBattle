<?php

require_once __DIR__. '/lib/Ship.php';

function printShipSummary($someShip)
{
    echo $someShip->name;
    echo '<hr/>';
    echo $someShip->weaponPower = '100';
    echo '<hr/>';
    echo $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    var_dump($someShip->weaponPower);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);

}

$myShip = new Ship;
$myShip->name = 'Wojtek';
$myShip->strength = "10";

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 30;

printShipSummary($myShip);
    echo '<hr/>';
printShipSummary($otherShip);
echo '<hr/>';

if($myShip->doesGIvenShipHaveMoreStrength($otherShip)){
    echo $otherShip->name. ' has more strength';
}else{
echo $myShip->name. ' has more strength';
}