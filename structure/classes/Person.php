<?php

class Person extends Mammal {
    private $firstname;
    private $lastname;

    public function __construct($pFirstname, $pLastname, $pColor, $pYear, $pSex)
    {
        parent::__construct($pColor, $pYear, $pSex);

        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }

    public function iAm() {
        return "Je suis une " . get_class($this) . " et je suis " . $this->color;
    }
}
