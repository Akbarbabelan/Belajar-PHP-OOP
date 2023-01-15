<?php

require_once "data/Person.php";

$akbar = new Person("Akbar", "Semarang");
$akbar->name = "Akbar";

$akbar->sayHello("Musthofa");

$joko = new Person("Joko", "Cirebon");
$joko->name = "Joko";

$joko->sayHello(null);

$akbar->info();
$joko->info();