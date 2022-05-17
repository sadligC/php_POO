<?php

class Tete {
    private $yeux;
    private $cheveux;
    private $bouche;
    private $nez;

    public function __construct($yeux, $cheveux, $bouche, $nez) {
        $this -> yeux = $yeux;
        $this -> cheveux = $cheveux;
        $this -> bouche = $bouche;
        $this -> nez = $nez;
    }
}

class Tronc {
    private $buste;
    private $bras;
    private $mains;

    public function __construct ($buste, $bras, $mains) {
        $this -> buste = $buste;
        $this -> bras = $bras;
        $this -> mains = $mains;
    }
}

class Jambes {
    private $cuisses;
    private $mollets;
    private $pieds;

    public function __construct ($cuisses, $mollets, $pieds) {
        $this -> cuisses = $cuisses;
        $this -> mollets = $mollets;
        $this -> pieds = $pieds;
    }
}

class Humain {
    private $tete;
    private $tronc;
    private $jambes;

    public function __construct (Tete $tete, Tronc $tronc, Jambes $jambes) {
        $this -> tete = $tete;
        $this -> tronc = $tronc;
        $this -> jambes = $jambes;
    }
}

// bob
$teteBob = new Tete ("bleu", "brun", "grande", "fin");
$troncBob = new Tronc ("large", "maigrichon", "poilues");
$jambesBob = new Jambes ("trappues", "ronds", 45);
$bob = new Humain ($teteBob, $troncBob, $jambesBob);

echo "<pre>";
print_r ($bob);
echo "</pre>";

?>