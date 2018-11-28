<?php

namespace classes;

use libs\Mammal;

class Dog extends Mammal {
    private $name;

    public function iAm() {
        return "Je suis un " . get_class($this) . " et je suis " . $this->color;
    }
}