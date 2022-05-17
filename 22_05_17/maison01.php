<?php

class Piece {
    protected $surface;
    protected $portes;
    protected $fenetres;
    // declaration de constantes
    public const mur = "parpaing";

    public function __construct ($s, $p, $f) {
        $this -> surface = $s;
        $this -> portes = $p;
        $this -> fenetres = $f;
    }

    // le mot clé final permet de "vérouiller" une méthode ou une classe
    final public function afficheSurf () {
        echo $this->surface;
    }

    // pour manipuler les constantes, on utilise self::
    public function afficheMur () {
        echo self::mur;
    }
}

class Cuisine extends Piece {
    private $eau;
    private $gaz;
    private $evac;

    public function setEau ($e) {
        $this -> eau = $e; 
    }
    public function setGaz ($g) {
        $this -> gaz = $g; 
    }
    public function setEvac ($e) {
        $this -> evac = $e; 
    }
}

class Sdb extends Piece {
    private $douche;
    private $wc;

    public function setDouche ($d) {
        $this -> douche = $d;
    }
    public function setWc ($w) {
        $this -> wc = $w;
    }

}

class Chambre extends Piece {
    private $lit;
    private $type;

    public function setLit ($l) {
        $this -> lit = $l;
    }
    public function setType ($t) {
        $this -> type = $t;
    }
}

class Boite {
    private $modele;

    public function setModele ($m) {
        $this -> modele = $m;
    }
    public function getModele () {
       return $this -> modele;
    }
}

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