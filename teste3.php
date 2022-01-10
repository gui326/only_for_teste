<?php

function preencheArraySorteado(){
	$array = [];
	
	for($i = 0; $i < 20; $i++){
		$array[] = random_int(1, 10);
	}
	
	return $array;
} 

function verificarRepeticaoNumero($array){
	$num = [];
	
	
	for($i = 0; $i < count($array); $i++){
		$boolean = true;
		
		for($y = 0; $y < count($array); $y++){
			if($y != $i){
				if($array[$i] == $array[$y]){
					$boolean = false;
					break;
				}
			}
		}
		
		if($boolean){
			$num[] = $array[$i];
		}
	}
	
	return $num;
};

echo "Os número que não se repetiram: ";

foreach(verificarRepeticaoNumero(preencheArraySorteado()) as $t){
	echo $t . " ";	
}