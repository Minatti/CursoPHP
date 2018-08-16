<?php  
	//Tentar & Capturar
try {
	
	//Gerando uma nova exceção
	throw new Exception("Houve um erro", 404);
	

} catch (Exception $e) {
	
	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));
}


?>