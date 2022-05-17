<?php

require ("voiture3.php");

$sport1 = new Sportcar ("MERCEDES","silver","electrique",0,0);
print_r ($sport1);
echo $sport1 -> hello();
?>