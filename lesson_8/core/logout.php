<?php

require_once 'session.php';

function logout()
{
    unset($_SESSION['user']);

    header('Location: http://lessons.loc/lesson_8/index.php/');
}

logout();