<?php

define('MIN_TITLE_LENGTH', 5);
define('MAX_TITLE_LENGTH', 100);
define('MAX_DESCRIPTION_LENGTH', 100);
define ('MIN_FIELD_LENGTH',1);

return [
    'title' => [
        function ($title){
            return (strlen($title) >= MIN_FIELD_LENGTH);
        },
        function ($title){
            return (strlen($title) >= MIN_TITLE_LENGTH);
        },
        function ($title){
            return (strlen($title) <= MAX_TITLE_LENGTH);
        },
    ],
    'description' => [
        function ($description){
            return (strlen($description) >= MIN_FIELD_LENGTH);
        },
        function ($description){
            return (strlen($description) <= MAX_DESCRIPTION_LENGTH);
        },
    ],
    'price' => [
        function ($price){
            return ((strlen($price) >= MIN_FIELD_LENGTH));
        }
    ],
    'currency' => [
        function ($currency){
            foreach (require 'currency.php' as $value){
                if ($value['name'] === $currency){
                    $result = $value['name'] === $currency;
                }
            }
            return $result;
        }
    ],
    'image' => [
        function ($image){
            foreach (require_once 'extension.php' as $value){
                if ($value['name'] === strrchr($image, '.')){
                    $result = $value['name'] === strrchr($image, '.');
                }
            }
            return $result;
        }
    ],
];