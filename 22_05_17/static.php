<?php

class Pi {
    public static $pi = 3.1416;
}

class Bonjour {
    public static function welcome() {
        echo "hello world<br>";
    }
}

Bonjour::welcome();
echo Pi::$pi;

?>