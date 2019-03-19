<?php

if ($_GET['redirect']) {
    header('Location: http://lessons.loc/lesson_6/index.php/');
}


echo '<pre>';

var_dump(getallheaders());