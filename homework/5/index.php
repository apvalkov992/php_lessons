<?php
    //$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis officiis quo, aut! Qui, ipsa, illum ab corporis et maiores veritatis, animi atque excepturi optio tempore deserunt. Iure tempore numquam tempora voluptate dolores. Aperiam quam quia accusantium perferendis nobis ducimus ratione cum libero tenetur quibusdam, ex voluptatibus laudantium animi eveniet eius.";
/*    $str = "http://lessons.loc:81/homework/5/";
    function expl (string $s, string $delim ) : array {
        $arr = [];
        for ($i=0, $key = 0; $i < strlen($s); $i++) {*/
  /*          if ($s[$i] != $delim) {
                $arr[$key] .= $s[$i];
            }
            else {
                $key++;
                continue;
            }*/
/*            ($s[$i] != $delim) ?  $arr[$key] .= $s[$i] : $key++;continue; ;
        }
        return $arr;
    }
    print_r(expl($str,'/'));*/

    $str = "http://lessons.loc:81/homework/5/";
    function customExplode (string $string, string $delimeter , int $limit = PHP_INT_MAX) : array {
        $result = [];
        $startPosition = 0;
        $key = 0;
        $substring = '';
        $lengthStr = strlen($string);

        for ($i = 0; $i < $lengthStr; $i++) {
            if ($key + 1 === $limit) {
                $result[$key] = substr($string,$i,$lengthStr);
                break;
            } 
            if ($string[$i] != $delimeter) {
                $substring .= $string[$i];
            }
            else {
                $result[$key] = $substring;
                $key++;
                $result[$key] = '';
                $substring = '';
                continue;
            }
            if ($i+1 === $lengthStr) {
                $result[$key] = $substring;
            }
            
        }   
        return $result;
    }
   print_r(customExplode($str,'/'));
    echo '<br>';
    echo '<br>';
    print_r(explode('/',$str));
    echo '<br>';
    echo '<br>';
    
    function customSubString (string $s, int $start, int $len = 0 ) : string {
        if ($len == 0) 
            $len = strlen($s);

        $newStr = '';
        for ($i=$start; $i < $len; $i++) {
            $newStr .= $s[$i];
        }
        return $newStr;
    }
    echo customSubString($str,5,12);

    echo '<br>';
    echo '<br>';   


    $array = ['abcdef','gh','ij','k',' ','lmnop','qrst','uv',' ','wxyz'];
    $initial = "1";
    function arrayReduce (array $arr, Closure $calb, $init = NULL) {
        $result;
        if ($init) {
            $result = $calb($result,$init);
        }
        for ($i=0; $i < count($arr); $i++) { 
            $result = $calb($result,$arr[$i]);
        }
        return $result;
    }
    print_r(arrayReduce($array, function($carry, $item) {
        $carry .= $item;
        return $carry;
    },$initial));

    echo '<br>';
    echo '<br>';  

    $array = ['abcdef','gh','ij','k',' ','lmnop','qrst','uv',' ','wxyz'];
    function customImplode (string $glue = '', array $array) : string {
        $resultStr = '';
        foreach ($array as $key => $value) {
            if ($key == count($array)-1) {
                $resultStr .= $value;
                break;
            }
            $resultStr .= $value . $glue;
        }
        return $resultStr;
    }
    echo customImplode(',',$array);
    echo '<br>';
    echo implode(',',$array);
    echo '<br>';
    echo '<br>';  

    $myArr = ['1',2,3,4,5,6,8,9];
    function myCount (array $array) : int {
        $result = 0;
        foreach ($array as $key => $value) {
            $result++;
        }
        return $result;
    }
    echo myCount($myArr);

    echo '<br>';
    echo '<br>';
    $input_array = ['a', 'b', 'c', 'd', 'e','g','h'];
    function customArrayChunk(array $array, int $size, bool $saveKey = false) : array {
        $resultArray = [];
        $tempArray = [];
        $row = 0;
        $tempKey = 0;
        if($size < 1) { return array(null);}
        foreach ($array as $key => $value) {
            if ($tempKey == $size) {
                $row++;
                $tempKey=0;
            }
            if ($saveKey) {
                $resultArray[$row][$key] = $value;
            } 
            else {
                $resultArray[$row][$tempKey] = $value;
            }
            $tempKey++;
        }
        return $resultArray;
    }
?>
<pre>
<?
    print_r(customArrayChunk($input_array, 3,true));
    echo '<br>';
    echo '<br>';
    print_r(array_chunk($input_array, 3, true));
?>