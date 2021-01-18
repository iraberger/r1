<?php
// 3. Прямоугольники
$size = $_GET["size"];
//$size =50;
header("Content-type: image/png"); 
$pic = ImageCreateTrueColor(100, 100); //пустой холст
ImageFill($pic, 0, 0, 0xf8f8f8); //Фоновый цвет


	$color = ImageColorAllocate($pic, 255, 0, 0);
	$x1 = 0;
	$y1 = 0;
	$x2 = $size;
	$y2 = $size;
	
	ImageFilledRectangle($pic, $x1, $y1, $x2, $y2, $color); 		    


ImagePNG($pic); 
ImageDestroy($pic); 

?>
