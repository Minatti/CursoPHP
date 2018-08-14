<?php  
//ATUALIZANDO DADOS
$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conexao->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD, WHERE idusuario = :ID");

$login = "luan";
$password = "99999$";
$ID = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $ID);
$stmt->execute();

echo "Dados alterados com sucesso!";

?>