<?php
$monthNumber = 6;
$months = [
    "Январь",
    "Февраль",
    "Март",
    "Апрель",
    "Май",
    "Июнь",
    "Июль",
    "Август",
    "Сентябрь",
    "Октябрь",
    "Ноябрь",
    "Декабрь"
];
echo $months[$monthNumber];

echo '<br>';
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
echo '<br>';
$i = 0;
while($i <= 40) {
    echo $i.' ';
    $i++;
}