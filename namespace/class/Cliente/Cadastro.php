<?php 
namespace Cliente;

//Herdando tudo que contêm na outra classe

class Cadastro extends \Cadastro {

	public function registrarVenda(){

		echo "Foi registrada uma venda para o cliente ".$this->getNome();
	}
}

?>