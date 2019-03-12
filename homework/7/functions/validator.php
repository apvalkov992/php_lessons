<?php
function validator(array $array){
    $result =[];
    $rules= require_once $_SERVER['DOCUMENT_ROOT'].'/homework/7/data/rules.php';
    foreach ($array as $key => $value){
        $result[$key] =$rules[$key]($value);
    }
    return $result;
}
