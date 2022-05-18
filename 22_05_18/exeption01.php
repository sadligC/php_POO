<?php


class Consomme {

    public function calcul ($dist, $essence) {
        if ($essence <= 0) {
            throw new Exception ("essence ne peut etre inferieur à z <br>");
        }
        return $dist/$essence;
    }
}

$data = array (
    array (50,10),
    array (50,0),
    array (50,7),
    array (50,8),
    array (50,-1),
    array (50,1)
);

foreach ($data as $val) {
    try {
        $conso =new Consomme ();
        echo "resultat: " .$conso->calcul ($val [0], $val[1]). "<br>";
    } catch (Exception $e) {
        echo "<hr>";
        echo $e -> getMessage();
        echo "</hr>";
    }
}