<?php

$config = require_once $_SERVER['DOCUMENT_ROOT'] . '/lesson_10/config/database.php';

return mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);