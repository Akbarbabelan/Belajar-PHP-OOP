<?php

require_once "data/Manager.php";

$manager = new President();
$manager->name= "Budi";
$manager->sayHello("Joko");


$vp = new VicePresident();
$vp->name = "Akbar";
$vp->sayHello("Joko");