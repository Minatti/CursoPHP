<?php  
//Sobre-escrevendo o que esta no php.ini
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

?>