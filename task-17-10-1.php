<?php

class Family
{
    private $peopleCount = 3;
    private $surname = 'Петровы';
    private $placeOfResidence = 'Москва';
    private $property = array();

    public function eat()
    {

    }

    public function goOnVacation()
    {
        
    }
}

class Father extends Family
{
    private $wife;
    private $age;
    private $profession;
    private $sex = 'male';

    public function work()
    {
        
    }

    public function repairTheCar()
    {
        
    }
}

class Mother extends Family
{
    private $husband;
    private $age;
    private $profession;
    private $sex = 'female';

    public function cook()
    {
        
    }

    public function dressUp()
    {
        
    }
}

class Child extends Father
{
    private $age = 8;
    private $sex = 'male';
    private $occupation = 'pupil';
    private $toys = array();

    public function study()
    {
        
    }

    public function doSport()
    {
        
    }
}

?>