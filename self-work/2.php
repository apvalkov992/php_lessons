<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сам раб 2</title>
</head>
<body>

<?php
//* Вывести на экран название месяца, преобразованное из номера месяца
//* Вывести на экран числа от 1 до 40
$monthNumber = 9;
switch ($monthNumber) {
    case 1:
        echo "Январь";
        break;
    case 2:
        echo "Февраль";
        break;
    case 3:
        echo "Март";
        break;
    case 4:
        echo "Апрель";
        break;
    case 5:
        echo "Май";
        break;
    case 6:
        echo "Июнь";
        break;
    case 7:
        echo "Июль";
        break;
    case 8:
        echo "Август";
        break;
    case 9:
        echo "Сентябрь";
        break;
    case 10:
        echo "Октябрь";
        break;
    case 11:
        echo "Ноябрь";
        break;
    case 12:
        echo "Декабрь";
        break;
    default: 
        echo "Такого месяца нет)";
        break;
}
echo nl2br (''.PHP_EOL);
echo '<br>';
$i = 1;
while($i <= 40) {
    echo $i.' ';
    $i++;
}
?>