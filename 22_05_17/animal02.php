<?php

interface Actions {
    public function makeSound ();
    public function run ();
}

interface Membres {
    public function gigotte();
}

class Chat implements Actions, Membres {
    public function makeSound () {
        echo "meow";
    }
    public function run() {
        echo "viiiite";
    }
    public function gigotte() {
        echo "papatte";
    }
}

?>