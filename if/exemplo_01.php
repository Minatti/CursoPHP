<?php 

// Meu exemplo, me empolguei RSRS.

$validadorFesta = 18;

$idadeCrianca = 17;
$idadePreAdolecente = 16;
$idadeMaior = 18;

if ($idadeCrianca < $validadorFesta){
	echo "Você não pode entrar";
}

echo "<br>";

if ($idadePreAdolecente < $validadorFesta) {
	echo "Entrada somente a partir dos 18 anos";

} else {
	echo "Pode entrar";
}
echo "<br>";

if ($idadeMaior >= $validadorFesta) {
	echo "OK, pode entrar!";
} else {
	echo "Menor não entra!";
}

echo "<br>";
// Exemplo da Aula

$qualSuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualSuaIdade < $idadeCrianca){

	echo "Criança";

}else if($qualSuaIdade < $idadeMaior) {

	echo "Adolecente";

} else if($qualSuaIdade < $idadeMelhor) {

	echo "Adulto";
} else {
	echo "Idoso";
}

echo "<br>";

// Exemplo de condição ternário

echo ($qualSuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>