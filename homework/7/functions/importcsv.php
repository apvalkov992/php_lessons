<?php
/*echo  "<pre>";
print_r($_FILES);*/
function importCsv (array $array){

    foreach ($array['imagecsv']['tmp_name'] as $k => $v){
        //print_r($array['imagecsv']['tmp_name']);
        if (is_uploaded_file($array['imagecsv']['tmp_name'][$k])) {
            //var_dump($array['imagecsv']['tmp_name'][$k]);
            var_dump(move_uploaded_file($array['imagecsv']['tmp_name'][$k], '..' . DIRECTORY_SEPARATOR .'import' . DIRECTORY_SEPARATOR . $array['imagecsv']['name'][$k]));
        }
        else {
            die();
        }
    }
    if (is_uploaded_file($array['csvFile']['tmp_name'])) {
        //var_dump($array['imagecsv']['tmp_name'][$k]);
        var_dump(move_uploaded_file($array['csvFile']['tmp_name'], '..' . DIRECTORY_SEPARATOR .'import' . DIRECTORY_SEPARATOR . $array['csvFile']['name']));
    }
    else {
        die();
    }
    $csv = array_map('str_getcsv', file('..' . DIRECTORY_SEPARATOR .'import' . DIRECTORY_SEPARATOR . $array['csvFile']['name']));
    $fp = fopen('..' . DIRECTORY_SEPARATOR . 'store' . DIRECTORY_SEPARATOR . 'filebase.csv', 'a');
    foreach ($csv as $k => $v) {
        fputcsv($fp, $csv[$k]);
        print_r($csv[$k]);
        echo "<br>";
    }
    fclose($fp);
}
importCsv($_FILES);


/*
$csv = array_map('str_getcsv', file('import.csv'));
$fp = fopen('..' . DIRECTORY_SEPARATOR . 'store' . DIRECTORY_SEPARATOR . 'filebase.csv', 'a');
foreach ($csv as $k => $v) {
fputcsv($fp, $csv[$k]);
    #print_r($csv[$k]);
    #echo "<br>";
}
fclose($fp);

#cho "<pre>";
#print_r($csv);*/