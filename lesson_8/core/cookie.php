<?php

function cookieSet(string $key, string $value, int $expire)
{
    return setcookie($key, $value, $expire, '/');
}

function cookieGet(string $key)
{
    if (isset($_COOKIE[$key])) {
        return $_COOKIE[$key];
    }

    return null;
}