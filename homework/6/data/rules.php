<?php
define('MIN_NAME_GOODS', 5);
define('MAX_NAME_GOODS', 100);
define('MIN_GOODS_DESCRIPTION', 10);
define('MAX_GOODS_DESCRIPTION', 1000);

return [
    'goodsName' =>
        function ($goodsName){
            $result='';
            if (!empty($goodsName)) {
                if (mb_strlen ($goodsName) < MIN_NAME_GOODS) {
                    return $result = "Наименование товара минимум ". MIN_NAME_GOODS . " символов";
                }
                elseif (mb_strlen ($goodsName) > MAX_NAME_GOODS){
                    return $result = "Наименование товара максимум " . MAX_NAME_GOODS ." символов";
                }
                else return $result = true;
            }
            else {
                return $result = "Наименование товара не введено!";
            }
        },

    'categori' =>
        function ($categori){
            $result='';
            if (!empty ($categori)){
                 return $result = true;
            } else{
                return $result = "Категория не выбрана!";
            }

        },
    'price' =>
        function ($price){
            $result='';
            if (!empty ($price)){
                return $result = true;
            } else{
                return $result = "Цена не указана!";
            }
        },
    'goodsDescription' =>
        function ($goodsDescription) {
            $result='';
            if (!empty($goodsDescription)) {
                if (mb_strlen ($goodsDescription) < MIN_GOODS_DESCRIPTION) {
                    return $result = "Описание товара минимум ". MIN_GOODS_DESCRIPTION . " символов";
                }
                elseif (mb_strlen ($goodsDescription) > MAX_GOODS_DESCRIPTION){
                    return $result = "Описание товара максимум " . MAX_GOODS_DESCRIPTION ." символов";
                }
                else return $result = true;
            }
            else {
                return $result = "Описание товара не введено!";
            }
        }
];

