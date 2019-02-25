<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашняя работа №1</title>
</head>
<body>
<?php
/**
 *
 */
$name = 'Olga';
var_dump($name);

/**    */

$null_=null;
$bool_=true;
$int_=263;
$str_='Stroka';
$float_=252.369;
var_dump($null_, $bool_, $int_,$str_,$float_);
//Создать переменную содержащую своё имя
//Создать переменную названием которой будет своё имя а значением фамилия
//Создать константу содержащую количество полных лет
//Создать статическую переменную содержащую пол
//Создать глобальную переменную содержащую название города
//Удалить все ранее созданные переменные
$name='Ольга';
$Olga='Близкая';
define('AGE',35);
static $gender = 'Женский';
$city = 'Город: ';
function my_city() {
    global $city;
    $city .= 'Донецк';
}
my_city();
echo '<br>'.$name.'<br>'.$Olga.'<br>'.AGE.'<br>'.$gender.'<br>'.$city.'<br>';
unset($name,$Olga,$gender,$city);
// unset(AGE);
echo $name.'<br>'.$Olga.'<br>'.AGE.'<br>'.$gender.'<br>'.$city.'<br>';

?>
</body>
</html>