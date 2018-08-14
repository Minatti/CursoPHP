<?php  
//DELETANDO DADOS
$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conexao->prepare("DELETE FROM tb_usuarios WHERE (idusuario = :ID)");

$ID = 1;

$stmt->bindParam(":ID", $ID);
$stmt->execute();

echo "Deletado com sucesso!";

?>