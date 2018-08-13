<?php  

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Yoda");
$cad->setEmail("yoda@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?> 