<?php
define('DATABASE_NAME','database'.DIRECTORY_SEPARATOR.'database.csv');
define('IMAGES_KEY', 'productFiles');
define('IMAGES_DIRECTORY', 'images');
define('DIR_MODE', 0744);

savePictures($_POST,$_FILES);

function saveCsv (array $data) {
    $handle = fopen(DATABASE_NAME, "a");
    if ($handle) {
        fputcsv($handle, $data, ';');
        return true;
    }
    fclose($handle);
    return false;
}

function deleteCsv () {
    if (file_exists(DATABASE_NAME)) 
        unlink(DATABASE_NAME);
}

function savePictures(array $arrayPOST = null, array $arrayFILES = null) {
    if(!$arrayPOST && !$arrayFILES) {
        return false;
    }
    $pictures = uploadPictures($arrayFILES);
    $srcPictures = '';
    if ($pictures) {
        foreach ($pictures as $key => $picture) {
            if ($key + 1 === count($pictures)) {
                $srcPictures .= $picture;
                break;
            }
            $srcPictures .= $picture . ';';
        }   
        $arrayPOST[IMAGES_KEY] = $srcPictures;

        return saveCsv($arrayPOST);
    } else {
        return false;
    }
}

function uploadFile($fileName, $filePath) {
    if( move_uploaded_file($fileName,$filePath) ) {
        return $filePath;
    }
    return false;
}

function uploadPictures (array $files) {
    $filePath = '';
    $result = [];

    foreach ($files[IMAGES_KEY]['name'] as $key => $fileName) {
        $filePath = createFilePath($fileName);
        if ( (uploadFile($files[IMAGES_KEY]['tmp_name'][$key], $filePath) === false || $files[IMAGES_KEY]['error'][0] == 1) && $filePath !== false) {
            return false;
        }
        $result[] = $filePath;
    }
    return $result;
}

function createDir (string $path) {
    if( !is_dir($path) ) {
        mkdir($path, DIR_MODE, true);
        return true;
    }
    return false;
}


function createFilePath (string $file) {
    $resultName = md5($file. time());
    $extension = end(explode('.',$file));
    $resultName.='.'.$extension;

    $savePath = IMAGES_DIRECTORY . DIRECTORY_SEPARATOR . substr($resultName, 0, 2) . DIRECTORY_SEPARATOR . substr($resultName,2,2);
    createDir($savePath);

    return $savePath . DIRECTORY_SEPARATOR . $resultName;
}

function readCsv () {
    if (file_exists(DATABASE_NAME)) {

        $handle = fopen(DATABASE_NAME, "r");
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            echo '<tr>';
            for ($c=0; $c < count($data); $c++) {
                if ($c === count($data)-1) {
                    echo '<td>';
                        foreach (explode(';',$data[$c]) as $key => $value) {
                            echo "<img src='$value' alt='' style='width: 50px;height:50px;'>";
                        }
                    echo '</td>';
                    continue;
                }
                echo '<td>' . $data[$c] . '</td>';
            }
            echo '</tr>';
        }
        fclose($handle);
        return true;
    } else {
        return false;
    }
}

function showNewProduct () {
    ?>
    <table class="table">
        <tbody>
            <?php readCsv();?>
        </tbody>
    </table>
    <?php
}

unset($_POST);