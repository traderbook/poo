<?php

// Création de la class
class Person
{
    // Création des propriétés
    private $firstname;
    private $lastname;
    // Je ne peux pas accéder à la propriété privée password.
    private $password;

    public function __construct($valueFirstname, $valueLastname, $valuePassword)
    {
        $this->firstname = $valueFirstname;
        $this->lastname = $valueLastname;
        $this->password= $valuePassword;
    }

    public function setFirstname($valueFirstName)
    {
        $this->firstname = $valueFirstName;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setLastname($valueLastName)
    {
        $this->lastname = $valueLastName;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setPassword($valuePassword)
    {
        $this->password = $valuePassword;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

// Création d'un objet de type Person
$bibi = new Person(
    "Bibi",
    "Bob",
    "bibiestalamaison");

var_dump($bibi);

//$bibi->setFirstname("Bibi");
//$bibi->setLastname("Bob");
//$bibi->setPassword("bibiestalamaison");
//
//var_dump($bibi->getFirstname());
//var_dump($bibi->getLastname());
//var_dump($bibi->getPassword());

$john = new Person(
    "John",
    "Doe",
    "johnestalamaison"
);

//$john->setFirstname("John");
//$john->setLastname("Doe");
//$john->setPassword("johnestalamaison");
//
var_dump($john);





