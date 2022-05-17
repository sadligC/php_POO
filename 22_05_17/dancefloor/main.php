<?php
function charge ($classe) {
    require $classe. ".php";
}
spl_autoload_register("charge");

$tab = array();

$bois = new Bois ();
$dance = new Dancefloor ();
array_push ($tab, $bois);
array_push ($tab, $dance);


foreach ($tab as $val) {
    $val->enflamer();
    echo "<br>";
    $val->floter();
    echo "<br>";
}

?>