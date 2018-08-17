<?php  
header("Content-Type: image/png");

//Criando a imagem
$img = imagecreate(256, 256);

//Criando a pallete color
$black = imagecolorallocate($img, 0, 0, 0);
$red = imagecolorallocate($img, 255, 0, 0);

imagestring($img, 5, 62, 230, "Curso de PHP 7", $red);
imagepng($img);
imagedestroy($img);

?>