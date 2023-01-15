<?php

namespace Data;

require_once "Animal.php";

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}
class DogShelter implements AnimalShelter
{
    public function adopt(string $name): dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}