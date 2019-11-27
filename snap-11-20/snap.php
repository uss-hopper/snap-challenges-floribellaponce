<?php

function counts ($array){

	$newArray = [];

	foreach( $array as $element){
		if (isset($newArray[$element])){
			$newArray[$element] = $newArray[$element] + 1;
		}else{
			$newArray[$element] = 1;
		};

		echo($element . " " . $newArray[$element] . PHP_EOL);
	};
	return $newArray;
};

$origArray = [2,2,3,2,3,3,4,4,4,4];
var_dump(counts($origArray));