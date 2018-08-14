<?php 

$conexao = new mysqli("127.0.0.1", "root", "", "dbphp7");

	if ($conexao->connect_error) {
		echo "Error: " .$conexao->connect_error;
	}
//statement
$stmt = $conexao->prepare("INSERT INTO tb_usuarios (deslogin, dessenha VALUES(?, ?)");
$stmt->bind_param("ss", $login, $pass);
$login = "user";
$pass = "12345";
$stmt->execute();

$login = "root";
$pass = "!@321#";
$stmt->execute();

?>