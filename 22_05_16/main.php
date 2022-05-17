<?php

require ("voiture.php");

$auto1 = new Car();
$auto2 = new Car();

$auto1 -> modele = "citroen";
$auto2 -> modele = "VW";

echo $auto1 -> modele. "<br>";
echo $auto1 -> hello(). "<br>";
$auto1 -> rempli(50);
echo $auto1 -> reservoir. "<br>";
$auto1 -> demarre ();
$auto1 -> accelere (20);

echo $auto1 -> vitesse. "<br>";
?>