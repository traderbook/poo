<?php

class Mammal {
    private $year = 0;
    private $sex = "NC";

    public function getYear() {
        return $this->year;
    }

    public function getSex() {
        return $this->sex;
    }

    public function addYear() {
        $this->year++;
    }
}

class Person extends Mammal {
    private $firstname;
    private $lastname;
}

class Dog extends Mammal {
    private $name;
}

$person = new Person();
$dog = new Dog();

var_dump("Person");
var_dump($person->getYear());
$person->addYear();
var_dump($person->getYear());

var_dump("Dog");
var_dump($dog->getYear());
$dog->addYear();
$dog->addYear();
$dog->addYear();
var_dump($dog->getYear());