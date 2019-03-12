<?php
define('MAX_SIZE_FILE', 3145728);
define('TYPE_FILE', 'image');

function validatorFile(array $array) {
    $result=true;
    $file = $array["image"];

    $type  = explode('/', $file['type']);
    $type = reset($type);

    if ($file["size"] > MAX_SIZE_FILE) {
        return $result= 'Размер файла превышает размер в ' . MAX_SIZE_FILE .' байта';
    }

    if ( $type !== TYPE_FILE) {
        return $result= 'Загружаемый файл не является изображением';
    }

    if (is_uploaded_file($file["tmp_name"])) {
        return $result;
    } else {
        return $result = "Ошибка загрузки файла";
    }
return $result;
}
/*
var_dump($_FILES);
echo "</br>";
var_dump(validatorFile());*/