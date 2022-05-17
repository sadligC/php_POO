<?php

require ("user.php");


$user = new User ();
    $user->setNom ("Lilou");
    $user->setPrenom ("Dallas");
    $user->setAge (5669);

print_r ($user);

// chainage des methodes: necessite un return $this dans la methode
$user->plusUn() ->plusUn() ->plusUn() ->moinsDeux();

print_r ($user);

?>