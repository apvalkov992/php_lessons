<?php
require_once 'validator.php';

function addGoods (array $array){
    $valid=[];
    $result ='';
    $fileBase = $_SERVER['DOCUMENT_ROOT'].'/homework/6/data/data.txt';
    $valid= validator($array);
    foreach ($valid as $key => $value){
        if($value === true){
            continue;
        }
        else{
            return $valid[key]=$value;
        }
    }
    $text = serialize($array);
    file_put_contents($fileBase, $text);
    return $result = "Товар добавлен";
}
