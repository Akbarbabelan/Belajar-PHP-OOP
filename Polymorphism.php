<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Akbar");
var_dump($company);

$company->programmer = new BackendProgammer("Akbar");
var_dump($company);

$company->programmer = new FrontendProgrammer("Akbar");
var_dump($company);

sayHelloProgrammer(new Programmer("Akbar"));
sayHelloProgrammer(new BackendProgammer("Akbar"));
sayHelloProgrammer(new FrontendProgrammer("Akbar"));