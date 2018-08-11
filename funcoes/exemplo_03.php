<?php 
//Parametros de funções    

function ola($texto = "mundo", $periodo = "Bom dia"){

	return "Olá $texto! $periodo!<br>";
}

echo ola();
echo ola("", "Boa noite");
echo ola("Mayara", "Boa tarde");
echo ola("Mou", "");

 ?>