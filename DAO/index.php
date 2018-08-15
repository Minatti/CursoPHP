<?php  
require_once("config.php");

$root = new Usuario();

$root->loadbyID(2);

echo $root;

?>