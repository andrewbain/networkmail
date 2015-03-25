<?php
session_start();

$a = $_SESSION[mailsto];
$r = $_SESSION[mailsto]/2;
$b = $_SESSION[mailsfrom];
$r1 = $_SESSION[mailsfrom]/2;
$ch = 160/2;
$cw = 300/2;

$relmarginl = (($_SESSION[relationship])/100)*$r;
$relmarginr = (($_SESSION[relationship])/100)*$r1;
$offset = $cw - $r + $relmarginl;
$offset1 = $cw + $r1 - $relmarginr;

#FDDC61

// Create transparent background
$img = imagecreatetruecolor(300 , 160);
imagesavealpha($img, true);
$bg = imagecolorallocatealpha($img, 0, 0, 0, 127);
imagefill($img, 0, 0, $bg);

//create color for left circle
$col = imagecolorallocatealpha($img, 147, 147, 147, 80);

//create left circle size and position
imagefilledellipse($img, $offset, $ch, $a, $a, $col);

//create color for right circle
$col1 = imagecolorallocatealpha($img, 243, 222, 141, 35);
//create right circle size and position
imagefilledellipse($img, $offset1, $ch, $b, $b, $col1);



header('Content-Type: image/png');


imagepng($img);
imagedestroy($img); 


