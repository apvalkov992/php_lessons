<?php
/*explode*/

function nearlyExplode (string $delimiter, string $str):array {
    $result = [];
    for ($i=0, $a = 0; $i < strlen($str); $i++) {
    if ($str[$i] !== $delimiter) {
        $result[$a] .= $str[$i];
    }
    else {
        $a++;
        continue;
        }
    }
    return $result;
}

/*array_reduce*/
function plus($first, $item)
{
    $first += $item;
    return $first;
}
function answer($first, $item){
    $first += $item;
    return $first;
    }
$a=[1,2,3,4,5];
$x=[];
function nearlyArray_reduce(array $array, callable $callback, $initial = null) {
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
/*substr*/
/*if $start>0, then programm is working*/
function nearlySubstr (string $string , int $start, int $length = null) 
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
?>