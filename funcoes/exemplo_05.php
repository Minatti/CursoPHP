<?php 
// Passagem de parametro por referência de memória

$a = 10;

function trocaValor(&$b){

	$b += 50;

	return $b;

}

echo trocaValor ($a);
echo "<br>";
echo $a;

 ?>