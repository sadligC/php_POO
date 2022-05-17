<?php

class Port {
    protected $port;

    public function __contruct ($p) {
        $this->port = $p;
    }
    public function getPort () {
        return $this->port;
    }

    public function accueilEngin (Amarrable $amarrable) {
        echo "il faut " .$amarrable->amarres(). " amarres pour accoster.<br>";
    }
}
?>