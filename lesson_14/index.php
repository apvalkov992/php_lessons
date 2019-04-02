<?php

require __DIR__ . '/vendor/autoload.php';

use App\CatFamily;
use App\Tiger;
use App\User;

$user = new User();
//$user->stroke(new Tiger(22));
$user->stroke(new \App\Lion(22));
echo nl2br(PHP_EOL);
$user->stroke(new \App\Dog());