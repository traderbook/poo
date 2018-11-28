<?php

abstract class Weapon {
    public function choc() {
        var_dump("Je tape...");
    }
}

class Sword extends Weapon { }
class Axe extends Weapon { }

class Person {
    private $name;
    private $weapon;

    public function choc() {
        if($this->weapon === NULL) {
            throw new Exception("Je n'ai pas d'arme");
        }

        $this->weapon->choc();
    }

    public function setWeapon(Weapon $pWeapon) {
        $this->weapon = $pWeapon;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

$sword = new Sword();
$axe = new Axe();

$hero = new Person();
$hero->setName("Bibi");

// A commenter ou décommenter
//$hero->setWeapon($axe);

var_dump($hero);

try {
    $hero->choc();
} catch (Exception $e) {
    var_dump($e->getMessage());
}

var_dump("Tout va bien...");





