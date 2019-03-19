<?php
require_once 'validatorfile.php';

define('IMAGES_DIRECTORY', 'images');
define('IMAGES_DIR_MODE', 0744);

function createImage (array $array){
    $result= true;
    $faieValid= validatorFile($array);
    if ($faieValid === true) {
        move_uploaded_file($array['image']['tmp_name'], pathFile($array));
    }
    else {
        return  $faieValid;
    }
    return $result;
}

function pathFile($array){
    $rootPath = '..' . DIRECTORY_SEPARATOR .'7'. DIRECTORY_SEPARATOR . IMAGES_DIRECTORY;
    $fileName = $array['image']['tmp_name'];
    $hash = md5($fileName . time());
    $path = $rootPath . DIRECTORY_SEPARATOR . substr($hash, 0, 2) . DIRECTORY_SEPARATOR . substr($hash, 2, 2);

    if (!is_dir($path)) {
        mkdir($path, IMAGES_DIR_MODE, true);
    }

    $ext = end(explode('.', $array['image']['name']));

    return $path . DIRECTORY_SEPARATOR . $hash . '.' . $ext;
}
