<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

$Conflict = new Conflict();
$dummy = new Dummy();
$sampe = new Sample();