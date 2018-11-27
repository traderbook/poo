<?php
class Dog {
    private $dateNaissance = "2000-01-01";

    /**
     * @return string
     */
    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }
}

$dog = new Dog();

var_dump(strtotime($dog->getDateNaissance()));

// Comparer la différence entre la date de naissance et la date actuel
// Convertir en Nombre d'années
// date()