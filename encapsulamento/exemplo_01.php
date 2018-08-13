<?php 

//Controle de acesso por encapsulamento

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome 	. "<br>";
		echo $this->idade 	. "<br>";
		echo $this->senha 	. "<br>";
	}
}

$objeto = new Pessoa();

//Você só tem acesso se chamar o método criado verDados();
echo $objeto->idade 	. "<br>";
//echo $objeto->verDados() . "<br>";

?>