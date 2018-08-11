<?php 
// Recuperando sessão

session_id('eiao0gr0ihkfvevsbra3mh8l3q');

require_once ("config.php");

//Forçando uma nova ID para ter mais segurança
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>