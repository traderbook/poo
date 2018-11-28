<?php

interface Weapon {
    public function choc();
}

class Sword implements Weapon {
    public function choc()
    {
        var_dump("Je tranche...");
    }

}
class Axe implements Weapon {
    public function choc()
    {
        var_dump("Ca defonce...");
    }
}

class Person implements Weapon {
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
$hero->setWeapon($sword);

var_dump($hero);

try {
    $hero->choc();
} catch (Exception $e) {
    var_dump($e->getMessage());
}

var_dump("Tout va bien...");





