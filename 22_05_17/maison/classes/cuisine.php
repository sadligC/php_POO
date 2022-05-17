<?php

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

?>