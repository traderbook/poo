<?php

class Animal {
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

class Mammal extends Animal {
    private $color;

    public function __construct($pColor)
    {
        $this->color = $pColor;
    }
}

class Oviparous extends Animal {
    private $color;

    public function __construct($pColor)
    {
        $this->color = $pColor;
    }
}

class Gecko extends Oviparous {
    private $name;
}

class Person extends Mammal {
    private $firstname;
    private $lastname;

    public function __construct($pFirstname, $pLastname, $pColor)
    {
        parent::__construct($pColor);

        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }
}

class Dog extends Mammal {
    private $name;
}

$person = new Person("john", "doe", "beige", 1, "male");
$dog = new Dog("noir");
$gecko = new Gecko("vert");

var_dump($person);
var_dump($gecko);