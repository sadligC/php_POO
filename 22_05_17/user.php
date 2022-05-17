<?php


class User {
    private $nom;
    private $prenom;
    private $age;

    public function setNom ($nom) {
        $this->nom = $nom;
    }
    public function setPrenom ($prenom) {
        $this->prenom = $prenom;
    }
    public function setAge ($age) {
        $this->age = $age;
    }

    public function plusUn () {
        $this->age ++;
        return $this;
    }

    public function moinsDeux () {
        $this->age -= 2;
        return $this;
    }
}