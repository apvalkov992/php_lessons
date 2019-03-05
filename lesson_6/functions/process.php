<?php

define('WELCOME_MESSAGE', 'Добро пожаловать');
define('GO_AWAY_MESSAGE', 'Пошел вон');
define('NO_VALID_MESSAGE', 'Не валидно поле');
define('ALERT_SUCCESS', 'alert-success');
define('ALERT_DANGER', 'alert-danger');

include_once 'validate.php';

function process(array $data)
{
    $users = include_once $_SERVER['DOCUMENT_ROOT'] . '/lesson_6/data/users.php';

    $validate = validator($data);
    $auth = false;

    if ($validate === true) {
        foreach ($users as $user) {
            if ($user['email'] === $data['email']) {
                $auth = comparePasswords($user['password'], $data['password']);
            }
        }

        return welcomeOrGoAway($auth);
    }

    return $validate;
}

function comparePasswords(string $passwordServer, string $passwordClient): bool
{
    return $passwordServer === $passwordClient;
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