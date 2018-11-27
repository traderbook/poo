<?php

class Person {
    private $firstname;
    private $lastname;
    private $dogs = array();

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
        $this->dogs[] = $pDog;
    }

    public function getDogs(): array
    {
        return $this->dogs;
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
$johnny = new Dog("Johnny", 1);

$john = new Person("John", "Doe");

$boby->setOwner($john);
$johnny->setOwner($john);

$john->buy($boby);
$john->buy($johnny);

// Dog = $john->getDogs()
$pet = $john->getDogs();

$dogs = $john->getDogs();

$nDogs = count($dogs);

foreach ($dogs as $dog) {
    var_dump($dog->getName());
}