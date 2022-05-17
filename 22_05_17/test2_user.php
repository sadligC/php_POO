<?php

// autoload de classe
function chargerClasse ($classe) {
    require $classe. ".php";
}

spl_autoload_register ('chargerClasse');

$user = new User ();
    $user->setNom ("Lilou");
    $user->setPrenom ("Dallas");
    $user->setAge (12);

    
print_r ($user);
?>