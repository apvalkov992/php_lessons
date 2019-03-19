<?php

define('FORM_FILE_KEY', 'image');
define('STORE_FILE_NAME', 'store/goods.json');

require_once '../functions/files.php';

function create(){
    $storePath = '..' . DIRECTORY_SEPARATOR . STORE_FILE_NAME;
    $good = [];
    $files = store(FORM_FILE_KEY);

    $good['title'] = $_POST['title'];
    $good['price'] = $_POST['price'];
    $good['description'] = $_POST['description'];
    $good['images'] = $files ? $files : [];
    $good['created_at'] = date('d-m-Y H:i:s', time());

    storeJson($good, $storePath);
}

create();

