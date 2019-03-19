<?php
/**
*Вывести категории;
 */
function displayCategori (array $array){
    foreach ($array as $key => $value){
        if(is_array($value)){
            $key = mb_strtoupper($key);
            echo"<option disabled>$key</option>";
            displayCategori($value);
        }
        if(!is_array($value)){
            echo"<option value='$value'>$value</option>";
        }
    }
}