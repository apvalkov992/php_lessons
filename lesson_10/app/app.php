<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lesson_10/database/tools.php';

$result = select("SELECT * FROM users WHERE phone is null ORDER BY id");

echo '<pre>';

print_r($result);