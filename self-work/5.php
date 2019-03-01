<?php
$test=[
'blue',
'green',
'black',
'white',
'red'
];
function search(array $t, int $r){


	foreach ($t as $key => $value) {
					if($key === $r){
						$answer=$value;
						return $value;
					};
	};
};
echo search($test, 2);
?>