<?php
$row = 1;
if (($handle = fopen("../filebase.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
        $num = count($data);
        var_dump($num);
        //echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";

        }//var_dump($data);
    }
    fclose($handle);
    var_dump($data);
}