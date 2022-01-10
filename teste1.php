function encontrarSeculo($ano){
	return is_float(($ano / 100)) ? intval(($ano / 100)) + 1 : ($ano / 100);
}