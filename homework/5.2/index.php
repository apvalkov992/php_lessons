<?php
//implode, count, array-chunk

/**
 * @param string $glue
 * @param array $pieces
 * @return string
 */
function customImplode (array $pieces, string $glue = '') : string{
    $result='';
    foreach ($pieces as $value){
        $result.=$value.$glue;
    }
    if ($glue !== '') {
        $result = substr($result, 0, -(strlen($glue)));
    }
    return $result;
}

$array = [
    'имя'=>[8.1,8,8,8,8=>[78,54,12,8,44,11,55,789]],
    'почта',
    'телефон',
    5 =>[1,2,234=>[7,5,5,8,9=>[7.8,7,2,5,69,9,9]]]
];

$array2 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
    0=> 785,
    'dfsfsef' =>824,
    785 => 71511,
    111111 =>7777777
);

var_dump (implode ("////",$array));
echo '<br>';
var_dump (customImplode ($array,'////'));

/**
 * @param array $array
 * @param int $mode = 0 or 1 (COUNT_NORMAL or COUNT_RECURSIVE)
 * @return int
 */
function customCount (array $array, int $mode = 0) : int{
    global $result;
    if ($mode === 1) {
        foreach ($array as $value) {
            if ($mode === 1) {
                if (is_array($value)) {
                    $result++;
                    customCount($value, 1);
                } else {
                    $result++;
                }
            }
        }
    }
    else{
        foreach($array as $value){
             $result++;
        }
    }
    return $result;
}

echo '<br>';
var_dump (count ($array,1));
echo '<br>';
var_dump (customCount ($array,1));


/**
 * @param array $array
 * @param int $size
 * @param bool $preserve_keys
 * @return array
 */
function customArray_chunk (array $array , int $size, bool $preserve_keys = FALSE) : array{
    $result = [];
    $i=0;
    foreach ($array as $key => $value){
        if ($preserve_keys) {
            $result[$i][$key] = $value;
        }else{
            $result[$i][] = $value;
        }
        if(count($result[$i]) === $size){
            $i++;
        }
    }
    return $result;
}
echo '<pre>';
print_r(array_chunk($array2,2,true));
print_r(customArray_chunk($array2,2,true));

