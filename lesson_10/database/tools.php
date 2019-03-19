<?php

function select(string $query): array
{
    $connect = require_once 'connect.php';
    $data = [];

    if ($result = mysqli_query($connect, $query)) {

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        mysqli_free_result($result);
    }

    return $data;
}

/**
 * CRUD - create, read, update, delete.
 *
 * @param string $query
 *
 * @return bool|mysqli_result
 */
function crud(string $query)
{
    $connect = require_once 'connect.php';

    return mysqli_query($connect, $query);
}
