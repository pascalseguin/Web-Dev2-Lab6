<?php
header('Content-Type: image/jpeg');

if (isset($_GET['file'])){
    $file = $_GET['file'];
    $imgname = "images/art/$file.jpg";
   $img = imagecreatefromjpeg($imgname);

    if(isset($_GET['width'])){
        $width = $_GET['width'];
        $newimg = imagescale($img, $width,$width);
    }
    else{
        $newimg = imagescale($img, 600, 600);
    }
    $fontFile = realpath('font/Lato-Medium.ttf');
    $fontSize1 = 18;
    $fontSize2 = 24;
    $text1 = "";
    $text2 = "";
    $textColor =  imagecolorallocate($newImg, 238,238,238);
    if (isset($_GET['text1'])){
        $text1 = $_GET['text1'];
        if (isset($_GET['size1'])){
            $fontSize1 = $_GET['size1'];
        }
        imagettftext($newImg, $fontSize1,0,250,160,$textColor,$fontFile,$text1);
    }
    if (isset($_GET['text2'])){
        $text2 = $_GET['text2'];
        if (isset($_GET['size2'])){
            $fontSize1 = $_GET['size2'];
        }
        imagettftext($newImg, $fontSize2,0,250,160,$textColor,$fontFile,$text2);
    }
   imagejpeg($newImg);
}


?>