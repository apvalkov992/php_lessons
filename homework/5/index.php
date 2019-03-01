<?php
/*
* Написать функцию аналог `explode`
* Написать функцию аналог `substr`
* Написать функцию аналог `array_reduce`
*/
//Написать функцию аналог `explode`

/**
 * @param string $delimer
 * @param string $row
 * @return array
 */
function analogExplode (string $delimer, string $row) : array {
    $result = [];
    for ($i=0, $k = 0; $i < strlen($row); $i++) {
        if ($row[$i] !== $delimer) {
            $result[$k] .= $row[$i];
        }
        else {
            $k++;
            continue;
        }
    }
    return $result;
}
//print_r(analogExplode(" ", 'кусок1 кусок2 кусок3 кусок4 кусок5 кусок6'));

//Написать функцию аналог `array_reduce`
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}
function product($carry, $item){
    $carry += $item;
    return $carry;
    }
$a=[1,2,3,4,5];
$x=[];
/*
 * @param array $array
 * @param callable $callback
 * @param null $initial
 * @return
 */
function analogArray_reduce(array $array, callable $callback, $initial = null) {
    if (is_null($initial)){
        $result=null;;
    }else {
        $result = $initial;
    }
    for ($i=0; $i<count($array);$i++){
        $result = $callback($result,$array[$i]);
    }
    return $result;
}
//var_dump(array_reduce($a, "product", 10));
//var_dump(analogArray_reduce ($a,"sum"));
//var_dump(array_reduce($x, "sum", "Нет данных"));

//Написать функцию аналог `substr`

/**
 * @param string $string
 * @param int $start
 * @param int|null $length
 * @return bool|null|string
 */
function analogSubstr (string $string , int $start, int $length = null) //Работает при положительном значении $start
{
    $result = null;
    $s="";
    if (strlen($string) < 1 or (strlen($string)) < $start or (strlen($string) - abs($length)) < $start) {
        return $result = false;
    }
    if ($start >= 0){
        if (is_null($length)) {
            $length = strlen($string);
        }
        elseif ($length < 0){
            $length = strlen($string) - abs($length);
        }
        for ($i = $start; $i < $length; $i++) {
            $result .= $string[$i];
        }
        return $result;
    }
}

//var_dump (analogSubstr("abcdef", 0, -1 ));
//var_dump (analogSubstr("abcdef", 2, -1 ));
//var_dump (analogSubstr("abcdef", 4, -4 ));