<?php
//Gerando um arquivo .csv com os dados armazenados
require_once("config.php");

	$dados = new Sql();

	$users = $dados->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$titles = array();

	//Colunas
	foreach ($users[0] as $key => $value) {
		array_push($titles, ucfirst($key));
	}

	$file = fopen("users.csv", "w+");

	fwrite($file, implode(",", $titles) . "\r\n");
	
	//Linhas
	foreach ($users as $row) {

		$data = array();
		
	foreach ($row as $key => $value) {
		array_push($data, ucfirst($value));

	}//fecha coluna

	fwrite($file, implode(",", $data) . "\r\n");

	}//fecha linha	

	fclose($file);

 ?>