<?php

abstract class Animal {
    private $year = 0;
    private $sex = "NC";
    protected $color;

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