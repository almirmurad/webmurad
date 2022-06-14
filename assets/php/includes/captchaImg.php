<?php
session_start();
header("Content-type:image/jpeg");

$n = $_SESSION['captcha'];
$imagem = imagecreate(80, 35);
imagecolorallocate($imagem, 200, 200, 200);

$fontColor = imagecolorallocate($imagem, 165, 165, 165);

imagettftext($imagem, 16, 0, 15, 28, $fontColor, 'GoboldCUTSItalic.otf', $n);

imagejpeg($imagem, null, 100);
?>