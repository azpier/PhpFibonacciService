<?php

$number_of_fibs = isset($_GET['num']) ? intval($_GET['num']) : -1;

header('Content-type: application/json');
	
echo json_encode(array('fibonacci'=> (fibonacci($number_of_fibs))) );
		
function fibonacci($n) {

//0, 1, 1, 2, 3, 5, 8, 13, 21

/*this is an error condition
   returning -1 
*/

$fibonacci = array();
	
if($n < 1) {
	
    $fibonacci[] = -1;
	
	return $fibonacci;
	}

$a = 0;
$b = 1;

$fibonacci[] = $a;
$fibonacci[] = $b;

for($i=1   ; $i<= $n-2 ;  $a=$b, $b=$c, $i++ ) {
  $c = $a+$b;
  $fibonacci[] = $c;

}

return $fibonacci;

}


?>



