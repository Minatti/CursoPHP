<?php  
//INSERINDO DADOS
$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conexao->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)";

$login = "jose";
$password = "13246579";


$stmt->bind_param(":LOGIN", $login);
$stmt->bind_param(":PASSWORD", $password);

$stmt->execute();

echo "Inserido com sucesso!";

?>