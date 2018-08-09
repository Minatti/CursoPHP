<?php 

/* Função para colocar as letras em caixa MAIUSCULA, minúscula */

//Minhas variáveis
$nome = "luan";
$sobrenome = "carminatti";

$nome = strtoupper($nome);
echo $nome;

echo "<br>";
// Usando interpolação para juntar nome com sobrenome
$nome = strtolower($nome);
$sobrenome = strtolower($sobrenome);
echo "Oi eu sou o $nome $sobrenome.";

echo "<br>";

// Concatenando
echo ucwords($nome." ".$sobrenome);

//Somente a primeira letra em maiuscula
echo ucfirst($nome);
?>