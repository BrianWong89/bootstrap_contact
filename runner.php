<?php

require("vendor/autoload.php");
require("classes/Human.php");

$m = new Human();
$m->setName("Brian");
$m->setDateofbirth("10/03/1989");

$m2 = new Human();
$m2->setName("Kenneth");
$m2->setDateofbirth("01/09/1987");

echo $m->getName()."<br>";
echo $m->getDateofbirth()."<br>";

echo $m2->getName()."<br>";
echo $m2->getDateofbirth()."<br>";

echo $m->getName() . " is " . $m->calculateAge() . " years old."."<br>";
echo $m2->getName() . " is " . $m2->calculateAge() . " years old.";