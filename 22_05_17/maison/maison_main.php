<?php
function loadClass ($classe) {
    require "classes/" .$classe. ".php";
}

spl_autoload_register ('loadClass');

    $cuisine1 = new Cuisine (15,3,2, "carrelage");
        $cuisine1 -> setEau(1);
        $cuisine1 -> setGaz(1);
        $cuisine1 -> setEvac(2);
        $cuisine1 -> setEvac(2);

    $sdb1 = new Sdb (10,1,2, "parquet");
        $sdb1 -> setDouche (1);
        $sdb1 -> setWc (1);

    $chambre11 = new Chambre (10,1,1, "moquette");
        $chambre11 -> setLit (2);
        $chambre11 -> setType ("enfant");

    $chambre12 = new Chambre (15,2,1, "lino");
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
$maison1->affiche ();

    $chambre13 = new Chambre (12,1,1, "moquette");
        $chambre13 -> setLit (1);
        $chambre13 -> setType ("ami");
    $maison1 -> ajouterChambre ($chambre13);
$maison1->affiche ();
?>