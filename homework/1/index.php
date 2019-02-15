<?php
/**
 *
 */


$name = "den";

$den = "Zasulskiy";

const FULL_AGE = 26;

global $city;

static $sex = "male";

global $city;

$city = 'Donetsk';

var_dump($name, $den, $sex, $city);

unset($name, $den, $sex, $city);

