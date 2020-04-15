<?php

function makeImg() {
    for ($i=0; $i < 10; $i++ ){
        header('Content-Type: image/jpg');
        $imgname = "images\art\' . $i . '.jpg";
        $img = imagecreatefromjpeg($imgname);
        $newimg = imagescale($img,200,200);
        imagejpeg($newimg);
    }
}
makeImg();                
                ?>