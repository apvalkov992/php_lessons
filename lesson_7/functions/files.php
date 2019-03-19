<?php

define('IMAGES_DIRECTORY', 'images');
define('IMAGES_DIR_MODE', 0744);

function store(string $fileKey) {
    $path = '../' . IMAGES_DIRECTORY;
    $result = [];

    if (makeDir($path)) {
        foreach ($_FILES[$fileKey]['name'] as $key => $fileName) {
            $file = '';
            $filePath = createFilePath($fileName);

            if ($_FILES[$fileKey]['errors'][$key]) {
                continue;
            }

            if (!$file = saveFile($_FILES[$fileKey]['tmp_name'][$key], $filePath)) {
                dropFiles($fileKey);
                break;
            }

            $result[] = $file;
        }

        return $result;
    }

    return false;
}

function createFilePath(string $fileName) {
    $rootPath = '..' . DIRECTORY_SEPARATOR . IMAGES_DIRECTORY;
    $hash = md5($fileName . time());

    $path = $rootPath . DIRECTORY_SEPARATOR . substr($hash, 0, 2) . DIRECTORY_SEPARATOR . substr($hash, 2, 1);

    if (!is_dir($path)) {
        mkdir($path, IMAGES_DIR_MODE, true);
    }

    $fileChunks = explode('.', $fileName);
    $ext = end($fileChunks);

    return $path . DIRECTORY_SEPARATOR . $hash . '.' . $ext;
}

function dropFiles(string $fileKey){
    $path = '../' . IMAGES_DIRECTORY;

    foreach ($_FILES[$fileKey]['name'] as $key => $fileName) {
        $file = $path . DIRECTORY_SEPARATOR . $fileName;

        if (file_exists($file)) {
            unlink($file);
        }
    }
}

function saveFile($tmpFile, $destinationFile){
    if (move_uploaded_file($tmpFile, $destinationFile)) {
        return $destinationFile;
    }

    return false;
}

function makeDir(string $path) {
    if (!is_dir($path)) {
        return mkdir($path, IMAGES_DIR_MODE);
    }

    return true;
}

function storeJson(array $data, string $fileName){
    if (!file_exists($fileName)) {
        return false;
    }

    $read = file_get_contents($fileName);

    $existData = json_decode($read, true);

    $existData[] = $data;

    $result = json_encode($existData);

    return file_put_contents($fileName, $result);
}