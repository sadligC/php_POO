<?php

//classe abstraite
abstract class Vehicule {
    protected $couleur;
    protected $modele;

    public function __construct ($c, $m) {
        $this->couleur = $c;
        $this->modele = $m;
    }

    abstract public function affiche ();
}

class Automobile extends Vehicule {
    public function affiche () {
        echo $this->modele;
    }
}

$auto = new Automobile ("rouge", "C3");
$auto -> affiche ();