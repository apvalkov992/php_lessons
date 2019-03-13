<?php

session_start();

function sessionSet(string $key, string $value)
{
    $_SESSION[$key] = $value;

    return isset($_SESSION[$key]);
}

function sessionGet($key)
{
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    }

    return null;
}

function delete(string $key)
{
    if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);

        return isset($_SESSION[$key]);
    }

    return false;
}
