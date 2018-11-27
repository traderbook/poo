<?php

// Création de la class
class Person {
    // Création des propriétés
    private $firstname;
    private $lastname;
    // Je ne peux pas accéder à la propriété privée password.
    private $password;

    public function setFirstname($valueFirstName) {
        $this->firstname = $valueFirstName;
    }

}

// Création d'un objet de type Person
$bibi = new Person();

$bibi->setFirstname("Bibi");

var_dump($bibi);

$john = new Person();

$john->setFirstname("John");

var_dump($john);





