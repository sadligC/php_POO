<?php

class Prof {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $specialite = array();

    public function __construct ($i, $n, $p, $e ) {
        $this->id = $i;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $e;
    }

    public function ajoutSpec ($code, $libelle) {
        $this->specialite [] = new Specialite ($code, $libelle);
    }

    public function afficheSpec () {
        foreach ($this->specialite as $s){
            afficheTab ($s);
        }
    }
}

class Specialite {
    private $code;
    private $libelle;

    public function __construct ($c, $l) {
        $this->code = $c;
        $this->libelle = $l;
    }

    public function affiche() {
        echo "spec code: " .$this->code. " libelle: " .$this->libelle;
    }
}

function afficheTab ($tab){
    echo "<pre>";
    print_r ($tab);
    echo "</pre>";
}

?>