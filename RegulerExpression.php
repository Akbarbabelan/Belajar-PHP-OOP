<?php

$matches = [];
$result = (bool)preg_match_all("/eko|awan|edy/i", "Eko Kurniawan Khannedy", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bingsit/i" , "***", "dasar lu anjing dan bingsit!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Kholifah Akbar Babelan Musthofa, Programmer, now");
var_dump($result);