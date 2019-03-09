<?php

//$categories = require_once $_SERVER['DOCUMENT_ROOT'] . '/test/6/data/categories.php';

function validator(array $data)
{
    $rules = require_once $_SERVER['DOCUMENT_ROOT'] . '/test/6/data/rules.php';
    $errors = [];

    foreach ($data as $field => $value) {
        //print_r($rules);
        if (isset($rules[$field])) {
            $result = validate($rules[$field], $value);

            if (!$result) {
                $errors[] = $field;
            }
        }
    }

    return (count($errors) > 0) ? $errors : true;
}

function validate(array $rule, $value): bool
{
    //print_r($rule);
    foreach ($rule as $callback) {
        if (!$callback($value)) {
            return false;
        }
    }

    return true;
}