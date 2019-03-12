<?php
    define('MAX_COST', 100000);
    define('MAX_DESCRIPTION', 1000);

    return [
        'productName' => [
            function ($name) {
                return is_string($name);
            },
            function ($name) {
                return (strlen($name)>1);
            }
        ],
        'contactPhone' => [
            function ($phone) {
                return ctype_digit($phone);
            },
            function ($phone) {
                return (strlen($phone) === 10);
            }
        ],
        'contactEmail' => [
            function ($email) { 
                return is_string($email);
            },
            function ($email) {
                return (strlen($email)>=5);
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
                $handle = fopen("database".DIRECTORY_SEPARATOR."Категории товаров.csv", "r");
                while (($data = fgetcsv($handle) ) !== FALSE){
                    foreach ($data as $value) {
                        if ($value === $rubric) {
                            fclose($handle);
                            return true;
                        }
                    }
                }
                return false;
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
                return (strlen($description) > 0) && (strlen($description) <= MAX_DESCRIPTION);
            }
        ],
        'productCost' => [
            function ($cost) {
                return is_numeric($cost);
            },
            function ($cost) {
                return ($cost < MAX_COST);
            }
        ]
    ];
?>