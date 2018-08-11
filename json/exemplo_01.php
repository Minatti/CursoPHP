<?php 
// Exemplo json encode
$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Luan',
	'Idade'=>23
));

array_push($pessoas, array(
	'nome'=>'Marco',
	'Idade'=>21
));

echo json_encode($pessoas);
 ?>