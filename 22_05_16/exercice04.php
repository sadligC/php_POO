<?php

class Piece {
    private $surface;

    public function __construct ($surface) {
        $this -> surface = $surface;
    }
}
class Cuisine extends Piece {
    private $usage = "cuisiner";
}
class Sdb extends Piece {
    private $usage = "se laver";
}
class Chambre extends Piece {
    private $usage = "dormir";
}

$cuisine1 = new Cuisine (19);
$sdb1 = new Sdb (8);
$chambre1 = new Chambre (12);

class Maison {
    private $cuisine;
    private $sbd;
    private $chambre;

    public function __construct (Cuisine $cuisine, Sdb $sdb, Chambre $chambre) {
        $this -> cuisine = $cuisine;
        $this -> sdb = $sdb;
        $this -> chambre = $chambre;
    }
}


$maison1 = new Maison ($cuisine1, $sdb1, $chambre1);


print_r ($maison1);

?>
