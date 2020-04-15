<?php
header('Content-Type: image/png');

$img = imagecreatetruecolor(500,500);

$color = imagecolorallocate($img,238,71,49);

imagefilledrectangle($img,0,0,499,499,$color);

$fontFile = realpath('font/Lato-Medium.ttf');
$fontSize = 24;
$textColor = imagecolorallocate($img,238,238,238);
imagettftext($img,$fontSize,0,50,230,$textColor,$fontFile,"Something Witty");

imagepng($img);

?>