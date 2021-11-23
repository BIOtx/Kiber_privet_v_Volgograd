<?php
$filename = '19.jpg';


// Content type
header('Content-Type: image/jpeg');



// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = 200;
$new_height = 100;



// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);



// Output
imagejpeg($image_p, null, 100);