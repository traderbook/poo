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

    public function getFirstname() {
        return $this->firstname;
    }

    public function setLastname($valueLastName) {
        $this->lastname = $valueLastName;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setPassword($valuePassword) {
        $this->password = $valuePassword;
    }

    public function getPassword() {
        return $this->password;
    }
}

// Création d'un objet de type Person
$bibi = new Person();

$bibi->setFirstname("Bibi");
$bibi->setLastname("Bob");
$bibi->setPassword("bibiestalamaison");

var_dump($bibi->getFirstname());
var_dump($bibi->getLastname());
var_dump($bibi->getPassword());

//$john = new Person();
//
//$john->setFirstname("John");
//$john->setLastname("Doe");
//$john->setPassword("johnestalamaison");
//
//var_dump($john);





