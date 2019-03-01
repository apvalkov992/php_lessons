<?php
	function explode_analog($delimiter, $string){
		$result = [];

		for ($i=0; $i < strlen($string); $i++) {

			if ($string[$i] == $delimiter){

			}
		}
	return $result;
	}

	function substr_analog($string, $start, $len){
		$result="";
		for ($i = 0; $i < strlen($string); $i++){
			if ($i >= $start && $i < $len){
				$result = $result.$string[$i];
			}
		}
		return $result;
	}

	
	var_dump(substr_analog("Hello world", 0, 5));
?>