<?php
require_once 'validator.php';
require_once 'createimage.php';


function addGoods (array $array){
    $result=[];
    $goodsArray=[];
    $valid= validator($array);
    foreach ($valid as $key => $value){
        if($value === true){
            continue;
        }
        else{
            $result[$key]=$value;
        }
    }
    if (!empty($_FILES['image'])){
    $addFile = createImage($_FILES);
        if ($addFile !== true) {
            $result['file'] = $addFile;
        }
    }
    if (empty($result)){
        $goodsArray['goodsName'] = $array['goodsName'];
        $goodsArray['categori'] = $array['categori'];
        $goodsArray['price'] = $array['price'];
        $goodsArray['goodsDescription'] = $array['goodsDescription'];
        $goodsArray['created_at'] = date('d-m-Y H:i:s', time());
        $goodsArray['image'] = pathFile($_FILES);
        $fp = fopen('..' . DIRECTORY_SEPARATOR . '7' . DIRECTORY_SEPARATOR . 'store' . DIRECTORY_SEPARATOR . 'filebase.csv', 'a');
        fputcsv($fp, $goodsArray);
        fclose($fp);
        $result['add'] = "Товар добавлен";
    }
    return $result;
}
