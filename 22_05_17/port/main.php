<?php

function charge ($classe) {
    require $classe. ".php";
}

spl_autoload_register ('charge');

$port1 = new port ("Brest");

$bateau1 = new Bateau;
    $bateau1->setMasse (50);
    $bateau1->affiche();
$port1->accueilEngin ($bateau1);
$hydra = new Hydravion;
    $hydra->setMasse (10);
    $hydra->affiche();
$port1->accueilEngin ($hydra);
?>