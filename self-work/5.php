<?php




function search ($el){
    $arr = [2, 3, 5, 8];
    foreach ($arr as $key => $value){
        $el = $value;
        if ($key === 2) {
            break;
        }
    }

    return $el;
}


echo search(2);