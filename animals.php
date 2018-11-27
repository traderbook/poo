<?php

class Person {
    private $firstname;
    private $lastname;
    private $dog;

    public function __construct(string $pFirstname, string $pLastname)
    {
        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function buy(Dog $pDog)
    {
        $this->dog = $pDog;
    }

    public function getDog(): Dog
    {
        return $this->dog;
    }
}

class Dog {
    private $name;
    private $years;
    private $owner;

    public function __construct($pName, $pYears)
    {
        $this->name = $pName;
        $this->years = $pYears;
    }

    /**
     * @return mixed
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getYears(): Int
    {
        return $this->years;
    }

    /**
     * @param mixed $years
     */
    public function setYears($years)
    {
        $this->years = $years;
    }

    public function setOwner($pOwner)
    {
        $this->owner = $pOwner;
    }
}

$boby = new Dog("Boby", 1);

$john = new Person("John", "Doe");

$boby->setOwner($john);

$john->buy($boby);

// Dog = $john->getDog()
$pet = $john->getDog();

var_dump($pet->getName());