<?php

class Mammal {
    private $year;
    private $sex;
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

var_dump($person);
var_dump($dog);