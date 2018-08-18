<?php
/* Criando uma pasta, permissões 0 a 7
0 = Não existe permissão
1 = exe
2 = grav
3 = exe, grav
4 = leitura
5 = leitura, exe
6 = leitura, grav
7 = permissão total
Regra *
7 = Criador
5 = Grupos
5 = Usuarios visitantes 
*/
$dir = "arquivos";
$permissao = "0775";
if (!is_dir($dir))  mkdir($dir, $permissao);
	echo "Diretório $dir criado com sucesso!";
?>