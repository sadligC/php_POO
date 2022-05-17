<?php 
class Car {
    // attributs de la classe
    public $modele;
    public $couleur;
    public $energie;
    public $reservoir;

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
?>