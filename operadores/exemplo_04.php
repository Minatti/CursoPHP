<?php 

/* Operador de Atribuição & Comparação */

$a = 30.0;

$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

//Repare que o operador "=" igual, ele atribue e acrescenta o valor, para comparar é necessário usar "==".

var_dump($a == $b);

//Comparando o valor e o tipo "==="

var_dump($a === $b);

//Comparando o que é diferente do valor da sua variável criada "!=", agora se for uma comparação que você precise também do tipo, você deve usar "!=="

//VALOR
var_dump($a != $b);

//VALOR E TIPO

var_dump($a !== $b);

?>