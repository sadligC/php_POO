<?php

trait message {
    public function msg () {
        echo "POO rulz <br>";
    }
}
trait message2 {
    public function msg2 () {
        echo "POO suxxx <br>";
    }
}

class Bonjour {
    use message;
}
class Bonjour2 {
    use message, message2;
}

$b = new Bonjour;
$b->msg ();
// $b->msg2 (); pas possible: msg2 n'existe pas dans la classe bonjour

$b2 = new Bonjour2;
$b2->msg ();
$b2->msg2 ();
 
?>