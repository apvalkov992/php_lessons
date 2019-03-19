<?php

define('MIN_PASSWORD_LENGTH', 6);

return [
    'email' => [
        function ($email){
            return is_string($email);
        },
        function ($email){
            $result = (bool) strpos($email, '@', 1);

            return $result && (bool) strpos($email,'.',  3);
        }
    ],
    'password' => [
        function ($password){
            return is_string($password);
        },
        function ($password){
            return strlen($password) >= MIN_PASSWORD_LENGTH;
        },
    ]
];