<?php

class Person {
    private $firstname;
    private $lastname;

    public function __construct($pFirstname, $pLastname)
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
}

class Dog {
    private $name;
    private $years;

    public function __construct($pName, $pYears)
    {
        $this->name = $pName;
        $this->years = $pYears;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getYears()
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
}

$boby = new Dog("Boby", 1);

var_dump($boby);