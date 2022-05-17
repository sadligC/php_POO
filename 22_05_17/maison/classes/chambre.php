<?php

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




?>