<?php

function crud(string $query)
{
    $connect = require_once 'connect.php';
    return mysqli_query($connect, $query);
}

