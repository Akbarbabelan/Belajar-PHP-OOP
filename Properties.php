<?php

require_once "data/Person.php";

$person = new Person("Akbar", "Semarang");
$person->name = "Akbar";
$person->address = "Semarang";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Babelan", null);
$person2->name = "Babelan";
$person2->address = null;

var_dump($person2);