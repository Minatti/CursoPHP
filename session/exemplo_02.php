<?php 

require_once = 'config.php';

//LIMPANDO A VARIÁVEL LOCAL

session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

/* DESTRUINDO
session_destroy($_SESSION['nome']);
*/

 ?>