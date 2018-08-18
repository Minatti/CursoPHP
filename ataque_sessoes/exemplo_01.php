<?php
//Reiniciando a sessão toda vez for atualizada para segurança
session_start();

session_regenerate_id();

echo session_id();
?>