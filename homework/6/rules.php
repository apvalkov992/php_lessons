<?php
    define('MAX_COST', 100000);

    return [
        'productName' => [
            function ($name) {
                return is_string($name);
            },
            function ($name) {
                return (strlen($name)>1) ? true : false ;
            }
        ],
        'contactPhone' => [
            function ($phone) {
                return ctype_digit($phone);
            },
            function ($phone) {
                return (strlen($phone) === 10) ? true : false ;
            }
        ],
        'contactEmail' => [
            function ($email) { 
                return is_string($email);
            },
            function ($email) {
                return (strlen($email)>=5) ? true : false ;
            },
            function ($email) {
                $result = (bool) strpos($email,'@',1);
                return $result && (bool) strpos($email,'.',3);
            }
        ],
        'formRubric' => [
            function ($rubric) {
                return is_string($rubric);
            },
            function ($rubric) {
                switch ($rubric) {
                    case 'Компьютерная техника':
                        return true;
                        break;
                    case 'Недвижимость':
                        return true;
                        break;
                    case 'Транспорт':
                        return true;
                        break;
                    case 'Спорт':
                        return true;
                        break;
                    case 'Животные':
                        return true;
                        break;   
                    default:
                        return false;
                        break;
                }
            }
        ],
        'productState' => [
            function ($state) {
                return is_string($state);
            },
            function ($state) {
                switch ($state) {
                    case 'Новое':
                        return true;
                        break;
                    case 'Б/У':
                        return true;
                        break;
                    default:
                        return false;
                        break;
                }
            }
        ],
        'description' => [
            function ($description) {
                return (strlen($description) > 0) ? true : false ;
            }
        ],
        'productCost' => [
            function ($cost) {
                return is_numeric($cost);
            },
            function ($cost) {
                return ($cost < MAX_COST) ? true : false ;
            }
        ]
    ];
?>