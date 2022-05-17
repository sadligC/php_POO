<?php

class Bateau implements amarrable {
    protected $masse;

    public function affiche () {
        echo "classe: " .__class__. ", masse: " .$this->masse. "<br>";
    }
    public function setMasse ($m) {
        $this-> masse = $m;
    }

    public function amarres () {
        return $this->masse /5;
    }
}

?>