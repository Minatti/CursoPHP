<?php  
//BEGIN TRANSACTION
$conexao = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

//INICIA A TRANSIÇÃO
$conexao->beginTransaction();

$stmt = $conexao->prepare(" DELETE FROM tb_usuarios WHERE idusuario = ?");

$ID = 2;


$stmt->execute(array($ID));

/*cancelar
$conexao->rollback();
*/
//CONFIRMANDO
$conexao->commit();
echo "Deletado com sucesso!";

?>