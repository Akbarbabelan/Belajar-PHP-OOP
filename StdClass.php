<?php

$array = [
    "firstName" => "Akbar",
    "middleName" => "Babelan",
    "lastName" => "Kurniawan"
];

$object = (object) $array;

var_dump($object);

echo "firsh Name $object->firstName" . PHP_EOL;
echo "middle Name $object->middleName" . PHP_EOL;
echo "lash Name $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Akbar", "Semarang");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);