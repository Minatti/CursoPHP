<?php 
//Tratamento de array bidimensional
$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Luan',
	'Idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Lucas',
	'Idade'=>23
));

print_r($pessoas[0]['nome']);
 ?>