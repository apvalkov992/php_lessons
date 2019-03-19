<?php 
$arr = [1,7,3,4,5,6,7,8];

/**
 * $a - масив для обработки
 * $b - искомое значение
 */
function search ($a, $b) {
	foreach ($a as $key => $val){
		if ($val === $b) {
			echo "значение $b найдено, ключ $key <br>";
		}
	}
}

search ($arr, 3);
 ?>

