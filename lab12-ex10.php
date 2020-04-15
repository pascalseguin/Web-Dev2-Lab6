<?php
header('Content-Type: image/jpg');

$imgname = "images\art\0.jpg";
$img = imagecreatefromjpeg($imgname);

$newimg = imagescale($img,600,600);
$fontFile = realpath('font/Lato-Medium.ttf');
$fontSize = 16;
$textColor = imagecolorallocate($newimg,238,238,238);
imagettftext($img,$fontSize,0,50,230,$textColor,$fontFile,"Anyone Else want a drink of this?");


imagejpeg($img);
?>