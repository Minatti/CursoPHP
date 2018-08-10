<?php 

/* Exercicio usando IF 

Criando um algoritmo que interprete o salário de um funcionário, este salário tem 3 condições, onde o salário pode ser: baixo, médio e alto.

*/

$nome = "Fulano";
$salario = 3.00000;
$nivelBaixo = 1.50000;
$nivelMedio = 3.50000;
$nivelAlto = 7.00000;

if ($salario < $nivelMedio) {
 	echo "Seu salário $nome, esta no nivel baixo";
 }  else if ($salario < $nivelAlto){
 	echo "Seu salário $nome, esta no nivel médio";
 } else if ($salario >= $nivelAlto){
 	echo "Seu salario $nome, é nivel alto";
 } 
 	
?>