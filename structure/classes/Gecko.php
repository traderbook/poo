<?php

class Gecko extends Oviparous {
    private $name;

    public function iAm() {
        return "Je suis un " . get_class($this) . " et je suis " . $this->color;
    }
}