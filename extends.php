<?php

abstract class Animal {
    private $year = 0;
    private $sex = "NC";
    private $color;

    public function __construct($pColor, $pYear, $pSex)
    {
        $this->color = $pColor;
        $this->year = $pYear;
        $this->sex = $pSex;
    }

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

abstract class Mammal extends Animal {
/*    private $color;

    public function __construct($pColor, $pYear, $pSex)
    {
        parent::__construct($pYear, $pSex);
        $this->color = $pColor;
    }
*/
}

abstract class Oviparous extends Animal {
    /*    private $color;

        public function __construct($pColor, $pYear, $pSex)
        {
            parent::__construct($pYear, $pSex);
            $this->color = $pColor;
        }
    */
}

class Gecko extends Oviparous {
    private $name;
}

class Person extends Mammal {
    private $firstname;
    private $lastname;

    public function __construct($pFirstname, $pLastname, $pColor, $pYear, $pSex)
    {
        parent::__construct($pColor, $pYear, $pSex);

        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }
}

class Dog extends Mammal {
    private $name;
}

$person = new Person("john", "doe", "beige", 1, "male");
$dog = new Dog("noir", 2, "female");
$gecko = new Gecko("vert", 1, "male");

var_dump($person);
var_dump($dog);
var_dump($gecko);