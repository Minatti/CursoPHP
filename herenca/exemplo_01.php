<?php  
//Classe Filha acessa atributos e metodos, classe PAI não pode ter acesso
class Documento {

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($n){
		$this->numero = $n;
	}
 }


class CPF extends Documento {

	public function validar():bool
	{
		$numeroCPF = $this->getNumero();

		//Validação do CPF

		return true;
	}
}

$doc = new CPF();

$doc->setNumero("123465469-55");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero()


?>