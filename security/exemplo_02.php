<?php  
// Evitando injection de SQL, mas atualmente deve ser utilizado a classe PDO
$id = (isset($_GET["id"]))?$_GET["id"]:4;

if (!is_numeric($id) || strlen($id) > 5){
	exit ("Pegamos você");
}
$conexao = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conexao, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
	
	echo $resultado->deslogin . "<br>";
}

?>