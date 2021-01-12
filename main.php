<?php


function ShowFiles()
{ 
	$dir = opendir("."); 
	while($file = readdir($dir)) 
	{
		print "$file<br>";
	}
	closedir($dir); 
}



?>
