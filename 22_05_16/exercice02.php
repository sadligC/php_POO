<?php
class Robot {
    public function greet () {
        return "Hello";
    }
}

class Android extends Robot {
    // surcharge ou override de la fonction greet
    // public function greet () {
    //     return "Hi";
    // }

    // ATTENTION: ceci ne fonctionne pas!!!!!!!!!!!!!!
    // public function greet () {
    //     $greeting = $this -> greet();
    //     return $greeting. "from Android";
    // }

    // pour executer la fonction greet du pere, il faut utiliser ::
    public function greet () {
        $greeting = parent::greet();
        return $greeting. " from Android";
    }
}

$robot =new Robot ();
echo $robot -> greet (). "<br>";
$android = new Android ();
echo $android -> greet (). "<br>";