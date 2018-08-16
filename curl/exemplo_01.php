<?php 
$cep = "01001000";
$link = "https://viacep.com.br/ws/$cep/json/";

$lib = curl_init($link);

curl_setopt($lib, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($lib, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($lib);
curl_close($lib);
$data = json_decode($response, true);
print_r($data["localidade"]);


?>