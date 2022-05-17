<?php

require ("professeur.Php");

$prof1 = new Prof (1, "Alela", "Diane", "mail");
$prof1 -> ajoutSpec (1, "folk");

$spec1 = new Specialite (2, "rock");
$spec1->affiche ();

afficheTAb($prof1);