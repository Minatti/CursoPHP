<?php
/* Variáveis Pré-definidas */
$nome = (int)$_GET["a"];

//var_dump($nome);

// Buscando o IP do user
// $ip = $_SERVER["REMOTE_ADDR"];
// echo $ip;
// Buscando nome do user
$scriptNome = $_SERVER["SCRIPT_NAME"];

echo $scriptNome;


?>