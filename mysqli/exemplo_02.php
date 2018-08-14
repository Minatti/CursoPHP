<?php 

$conexao = new mysqli("127.0.0.1", "root", "", "dbphp7");

	if ($conexao->connect_error) {
		echo "Error: " .$conexao->connect_error;
	}


$result = $conexao->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$push = array();

while ($row = $result->fetch_array()) {

	array_push($push, $row)
	var_dump($row)
}

echo json_encode($push);

?>