<?php
/**
 *
 */

<<<<<<< HEAD
$name = 'Kirill';

var_dump($name);

$NaUliceSneg = true;
var_dump($NaUliceSneg);

$MoiNomer = 245;
var_dump($MoiNomer);

$Zapyataya =67E-8;
var_dump($Zapyataya);

$MySurname = 'Naskidashvili';
var_dump($MySurname);

$RabochiiKod = null;

// Домашнее задание

$Gorod = 'Donetsk';

$MoeImya = 'Kirill';

$Kirill = 'Naskidashvili';

define('AGE', 18);
var_dump(AGE);

function Zadanie()
{
	static $Gender = 'Male';
}

function City()
{
	global $Gorod;
}
City();
echo $Gorod;

unset($name,$NaUliceSneg, $MoiNomer, $Zapyataya, $MySurname, $RabochiiKod, $MoeImya, $Kirill, $Gender, $Gorod);
=======
$name = 'My name';

var_dump($name);
>>>>>>> 40981a6c2b21a60eef185a511f3cbd1b343f28e1
