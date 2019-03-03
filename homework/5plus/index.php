
<pre>
<?php

//implode — Возвращает строку, содержащую строковое представление всех
// элементов массива в указанном порядке, со строкой glue между каждым
// элементом. Пустая строка при использовании пустого массива.
//<pre>

echo '<br>------------------implode------------------------------------ <br>';
$array = ['первый', 'второй' => [ 'ky' , 'asd', 'two' => ['442' , 777 ] , "ss"], 'третий'];
print_r($array);
echo  "<br>" ;

echo '<br>implode(",,,", $array) :<br>';
var_dump( implode(",,,", $array));

echo '<br>analog_implode(",,,", $array)<br>';
var_dump( analog_implode(",,,", $array));

function analog_implode($glue, $array){
    $result = '';
    if ($array == null) return '';
    foreach($array as $key => $value){
        is_array($array[$key]) ? $result .= 'Array' :
            $result .= $array[$key];
        $result .= $glue;
    }
    $glue == '' ?: $result = substr($result,0, -(strlen($glue)));
    return $result ;
}

echo '<br>------------------count------------------------------------ <br>';

// count - Подсчитывает количество элементов массива или чего-то в объекте.
print_r($array);
echo '<br>count($array, COUNT_RECURSIVE) :<br>';
var_dump( count($array,COUNT_RECURSIVE));

echo '<br>analog_count($array, COUNT_RECURSIVE)  :<br>';
var_dump( analog_count($array, COUNT_RECURSIVE) );

function analog_count($element, $mode = COUNT_NORMAL ) {
    $result=0;
    if (is_array($element)) {
        foreach ($element as $key => $value) {
            $result++;
            if (is_array($element[$key]) && $mode ) {
                $result += analog_count($element[$key], $mode); //рекурсия
            }
        }
    }
    else{
        echo 'подсчет в объекте';
    };
    return $result;
}

echo '<br>------------------array_chunk------------------------------------ <br>';

// array-chunk
//Разбивает массив на несколько массивов размером в size элементов.
//Если установлено в TRUE, ключи оригинального массива будут сохранены. По умолчанию установлено в FALSE,
// что переиндексирует каждую часть с числовыми ключами
$array = ['первый', 'второй' => 'ky' , 'asd', 'two' => '442' , 777  , "ss", 'третий'];
$size = 3;
$preserve_keys = true;
print_r($array);
echo "size = $size  <br>";
echo "preserve_keys = " ,  $preserve_keys, "<br>" ;
echo '<br>array_chunk :<br>';

$array = array_chunk($array, $size, $preserve_keys );
print_r($array);


$array = ['первый', 'второй' => 'ky' , 'asd', 'two' => '442' , 777  , "ss", 'третий'];
echo '<br>analog_array_chunk :<br>';
print_r(analog_array_chunk($array, $size, $preserve_keys ));

function analog_array_chunk(array $array, int $size, $preserve_keys = false){
    if ( $size < 1 )
        return 'Warning:  array_chunk(): Size parameter expected to be greater than 0';
    $result = [];
    $i = $j = 0;
    foreach($array as $key => $value){
        $preserve_keys ?: $key = $j;
        $result [$i][$key] = $value;
        if ($j < $size-1 ){
            $j++;
        }
        else{
            $j=0;
            $i++;
        }
    };
return $result;
}

?>
</pre>




