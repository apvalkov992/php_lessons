<?php

define('WELCOME_MESSAGE', 'Добро пожаловать');
define('GO_AWAY_MESSAGE', 'Пошел вон');
define('NO_VALID_MESSAGE', 'Не валидно поле');
define('ALERT_SUCCESS', 'alert-success');
define('ALERT_DANGER', 'alert-danger');

include_once 'validate.php';

function process(array $data)
{
    //$goods = include_once $_SERVER['DOCUMENT_ROOT'] . '/test/6/data/goods.php';
    $categories = include_once $_SERVER['DOCUMENT_ROOT'] . '/test/6/data/categories.php';

    //$validate = validator($data);
        $newGood = $data['good'];
        var_dump($newGood);
        $category = $data['category'];
    if (isset($newGood)) {
        foreach ($categories as $key => $value) {
            //var_dump($value);
            if ($category === $value) {

                addNewGood($category, $newGood);

            }
        }
    }


    return $validate;
}


function addNewGood(string $category, string $newGood) //: bool
{
    $goods = include_once $_SERVER['DOCUMENT_ROOT'] . '/test/6/data/goods.php';
    $temp = array( );
    $temp[$category] = $newGood;
    //print_r ($temp);
    $goods[] = $temp ;

    print_r ($goods);
    //'<span print_r($goods) </span>';
    //$fd = fopen("data/goods.php", 'w') or die("не удалось открыть файл");
    //fwrite($fd, $goods);
    //fclose($fd);
}

function welcomeOrGoAway(bool $auth = false){
    $layout = '<span class="alert %s">%s</span>';

    if ($auth) {
        return sprintf($layout, ALERT_SUCCESS, WELCOME_MESSAGE);
    }

    return sprintf($layout, ALERT_DANGER, GO_AWAY_MESSAGE);
}

function validateErrors(string $field){
    $layout = '<span class="alert %s">%s</span>';

    return NO_VALID_MESSAGE . ' ' . $field;

    return sprintf($layout, ALERT_DANGER, NO_VALID_MESSAGE . ' ' . $field);
}