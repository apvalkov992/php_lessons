<?php

    function validator (array $data) {

        $rules = require_once 'rules.php';
        $errors = [];
        foreach ($data as $key => $value) {
            if(isset($rules[$key])) {
                $result = checkRules($rules[$key],$value);

                if(!$result) {
                    $errors[] = $key;
                }
            }
        }
        return (count($errors) > 0) ? $errors : true ;
    }

    function checkRules(array $rules, $value) {
        foreach ($rules as $callback) {
            if (!$callback($value)) {
                return false;
            }
        }
        return true;
    }
?>