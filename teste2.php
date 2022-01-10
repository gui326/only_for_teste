function encontrarPrimos($inicial, $final){
	$primos = [];
	
	for($i = $inicial; $i <= $final;$i++){
		if(checarPrimo($i)){
			$primos[] = $i;	
		}
	}

    return $primos;
} 

function checarPrimo($primo){
	if($primo <= 1) return False;
	for($y = 2; $y < $primo; $y++){
		if($primo % $y == 0){
			return False;	
		}
	}
	return True;
}