<?php
require "maison01.php";

$cuisine1 = new Cuisine (15,3,2);
    $cuisine1 -> setEau(1);
    $cuisine1 -> setGaz(1);
    $cuisine1 -> setEvac(2);

$sdb1 = new Sdb (10,1,2);
    $sdb1 -> setDouche (1);
    $sdb1 -> setWc (1);

$chambre11 = new Chambre (10,1,1);
    $chambre11 -> setLit (2);
    $chambre11 -> setType ("enfant");
$chambre11->afficheMur();

$chambre12 = new Chambre (15,2,1);
    $chambre12 -> setLit (1);
    $chambre12 -> setType ("parent");

$boite1 = new Boite;
    $boite1 -> setModele ("americain");


$maison1 = new Maison;
    $maison1 -> setCuisine ($cuisine1);
    $maison1 -> setSdb ($sdb1);
    $maison1 -> setBoite ($boite1);
    $maison1 -> ajouterChambre ($chambre11);
    $maison1 -> ajouterChambre ($chambre12);

$maison1->affiche ()

?>