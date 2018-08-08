<?php
	
$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1995;
$salario = 1300.00;
$bloqueado = false;

/* Tipos compostos */
$bebidas = array("Stela Artois", "Budwaiser", "Skol beats", "Corona");

// echo $bebidas[3];

$nascimento = new DateTime();

/* variavel de ambiente, esta variavel analisa o tipo de dado */

// var_dump($nascimento);

/* Tipos especiais */

$arquivo = fopen("exemplo-03.php", "r");

// var_dump($arquivo);

$nulo = NULL;
$vazio = "";

?>