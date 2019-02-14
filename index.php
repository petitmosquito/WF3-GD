<?php
header("Content-type: image/png");

$image = @ImageCreate(300, 200) or die("Pb image");
$couleurFondIMage = ImageColorAllocate($image, 255, 0, 0);
ImagePng($image);