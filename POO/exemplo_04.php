<?php  
//Métodos mágicos
 class Endereco {

 	private $logradouro;
 	private $numero;
 	private $cidade;

 	//CONSTRUTOR
 	public function __construct($a, $b, $c){

 		$this->logradouro = $a;
 		$this->numero = $b;
 		$this->cidade = $c;
 	}
 	//Mandando remover da memória
 	public function __destruct(){

 		var_dump("DESTRUIR");


 	}

 	public function __toString(){

 		return $this->logradouro.", ".$this->numero." - ".$this->cidade;
 	}
 }

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");
//var_dump($meuEndereco);
//unset($meuEndereco);
echo ($meuEndereco);
echo "<br>";
?>