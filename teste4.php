function verificarSequenciaCrescente($arrayInt){
	if(verificarCrescente($arrayInt)){
		return "Sim é crescente";
	}
	
	for($i = 0; $i < count($arrayInt); $i++){
		$newArray = $arrayInt;
		
		unset($newArray[$i]);
		$newArray = array_values($newArray);
		
		if(verificarCrescente($newArray)){
			return "Sim é crescente";	
		}
	}
	
	return "Não é crescente";
}

function verificarCrescente($array){
	for($i = 1; $i < count($array); $i++){
		if($array[$i - 1] > $array[$i]){
			return false;	
		}
	}
	return true;
}


echo verificarSequenciaCrescente([3, 6, 155]);