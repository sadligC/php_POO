<?php 
class Car {
    // attributs de la classe
    private $modele;
    private $couleur;
    private $energie;
    private $reservoir;
    private $vitesse;

    public function __construct ($m, $c, $e, $r, $v) {
        $this -> modele = $m;
        $this -> couleur = $c;
        $this -> energie = $e;
        $this -> reservoir = $r;
        $this -> vitesse = $v;
    }

// definition des setters et getters  
    public function setModele ($model) {
        $this -> modele = $model;
    }
    public function getModele() {
        return $this -> modele;
    }


// methodes de la classe
    public function hello () {
        return "pouet";
    }
    public function rempli ($litres) {
        $this -> reservoir = $litres;
    }
    public function demarre () {
        $this -> vitesse = 10;
    }
    public function accelere ($plus) {
        $this -> vitesse += $plus;
    }
}

class Sportcar extends Car {
    public function 
}
?>