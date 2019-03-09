<?php


function validator(array $data)
{
    $rules = require_once $_SERVER['DOCUMENT_ROOT'] . '/homework/6/goods/data/rules.php';
    $errors = [];

    foreach ($data as $field => $value) {
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
    foreach ($rule as $callback) {
        if (!$callback($value)) {
            return false;
        }
    }

    return true;
}