<?php

define('SESSION_USER_KEY', 'user');

require_once 'session.php';
require_once 'cookie.php';

function auth(string $email, string $password)
{
    if (login($email, $password)) {
        header('Location: http://lessons.loc/lesson_8/cabinet.php/');
    } else {
        sessionSet('errors', 'Неверный email или пароль');
        header('Location: http://lessons.loc/lesson_8/index.php/');
    }
}

auth($_POST['email'], $_POST['password']);

function login(string $email, string $password)
{
    $users = json_decode(file_get_contents('../store/user.json'), true);

    foreach ($users as $user) {
        if ($user['email'] === $email) {
            if (checkPassword($user['password'], $password)) {
                $_SESSION[SESSION_USER_KEY] = $user;

                return isset($_SESSION[SESSION_USER_KEY]);
            }
        }
    }

    return false;
}

function checkPassword($hash, $password)
{
    return $hash === hash('sha256', $password);
}