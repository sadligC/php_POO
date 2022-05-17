<?php

class Maison {
    private $cuisine;
    private $sdb;
    private $chambre = [];
    private $boite;

    public function setCuisine ($c) {
        $this -> cuisine = $c;
    }
    public function setSdb ($s) {
        $this -> sdb = $s;
    }
    public function ajouterChambre ($c) {
       array_push ($this -> chambre, $c);
    }
    public function setBoite ($b) {
       $this -> boite = $b;
    }
    public function affiche () {
        echo "<pre>";
        print_r ($this);
        echo "</pre>";
    }
}

?>