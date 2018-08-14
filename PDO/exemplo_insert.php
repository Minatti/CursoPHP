<?php  
//INSERINDO DADOS
$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conexao->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "luan";
$password = "99999$";


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();

echo "Dados incluidos com sucesso!";

?>