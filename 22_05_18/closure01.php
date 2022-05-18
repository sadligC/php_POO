<?php 
$s = "hellop";
$f = function () use ($s) {
    echo $s;
};
$s = "ta soeur";
$f ();
?>