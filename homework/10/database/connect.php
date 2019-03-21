<?php

$config = require_once $_SERVER['DOCUMENT_ROOT'] . '/homework/10/config/parameterconnectdb.php';
return mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);

