<?php


define('ADD_MESSAGE', 'Товар добавлен');
define('NOT_ADD', 'Ошибка добавления товара');
define('NO_VALID_MESSAGE', 'Не валидно поле');
define('ALERT_SUCCESS', 'alert-success');
define('ALERT_DANGER', 'alert-danger');

include_once 'validate.php';

function process(array $data)
{
    $validate = validator($data);
    $add = false;
    $layout = '<span class="alert %s">%s</span>';
    if ($validate === true) {
        return addedOrNotAdded($add);
    }
    echo nl2br(sprintf($layout, ALERT_DANGER, NOT_ADD). PHP_EOL);
    return $validate;
}

function addedOrNotAdded(bool $add){
    $layout = '<span class="alert %s">%s</span>';

    if ($add === false) {
        return sprintf($layout, ALERT_SUCCESS, ADD_MESSAGE);
    }
        echo 'иначе мы тут';
    return sprintf($layout, ALERT_DANGER, NOT_ADD);
}

function validateErrors($field){
    $layout = '<span class="alert %s">%s</span>';

    return NO_VALID_MESSAGE . ' ' . $field;

    return sprintf($layout, ALERT_DANGER, NO_VALID_MESSAGE . ' ' . $field);
}