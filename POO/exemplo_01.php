<?php
// Exemplo com encapsulamento de modo publico 
class Pessoa{

	public $nome;//Atributo

	public function falar(){//Método

		return "o meu nome é: "
		.$this->nome;

	}
}

$josnel = new Pessoa();
$josnel->nome = "Josnel da Silva";
echo $josnel->falar();
?>