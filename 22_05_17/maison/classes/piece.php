<?php

class Piece {
    protected $surface;
    protected $portes;
    protected $fenetres;
    protected $sol;

    public function __construct ($s, $p, $f, $sol) {
        $this -> surface = $s;
        $this -> portes = $p;
        $this -> fenetres = $f;
        $this -> sol = $sol;
    }
}

?>