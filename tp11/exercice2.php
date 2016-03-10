
<?php
function operation($val1,$val2,$op) { 
	if ($op == "addition")
		return addition($val1,$val2) ;
	
	if ($op == "soustraction")
		return soustraction($val1,$val2) ;
	
	if ($op == "multi")
		return multi($val1,$val2) ;
	
	if ($op == "div")
		return div($val1,$val2) ;
}

?>
