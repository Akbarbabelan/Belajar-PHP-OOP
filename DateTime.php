<?php

$dateTime = new DateTime();
$dateTime->setDate(1990, 1, 23);
$dateTime->setTime(10, 10, 10, 10);

$dateTime->add(new DateInterval("P1Y"));


//$minusOneMonth = new DateInterval("P1M");
//$minusOneMont->invert = true;
//$minusOneMont->add($minusOneMont);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);

$now->settimeZone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10");
if($date){
var_dump($date);
}else{
    echo "Format salah" . PHP_EOL;
}