<?php

abstract class animal {
    abstract function cri();
}

class Chat extends Animal {
    public function cri () {
        echo "meow";
    }
}
class Chien extends Animal {
    public function cri () {
        echo "woof";
    }
}
class Vache extends Animal {
    public function cri () {
        echo "moooh";
    }
}
class Poule extends Animal {
    public function cri () {
        echo "coot";
    }
}

$cat = new Chat ();
$cat->cri();