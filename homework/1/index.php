<?php
/**
 *
 */

$Name = 'Arkhipov_A';
$a = ((bool) "true";
$b = ((int) 2019);
$c = ((float) 2019.2);
$d = ((string) "Строка");
$e = null;
var_dump($Name);

// Домашнее задание урока 1

$Name = `Alexander`;
$Alexander =`Arkhipov`;
define("AGE",	"24");
static $Sex = `male`;
global $City;
$City = `Donetsk`;
unset ($Name, $Alexander, $Sex, $City);

?>