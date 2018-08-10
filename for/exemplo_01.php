<?php 
/* @FOR, Tem incio, fim, fazendo incrementação ou decrementação */

//É dividido em 3 partes: 
/* 
1º: Crie sua variável de onde o for inicia e aonde ele termina 
2º: Enquanto a variável for menor que o valor
3º: Incremento ou decrementando;
*/ 
for ($i = 0; $i < 1000; $i+= 5) {

	if($i > 200 && $i <800) continue;

	if ($i === 900) break;

	echo $i . "<br>";
}

?>