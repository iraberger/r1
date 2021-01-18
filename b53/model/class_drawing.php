<?php
namespace drawing;

// Класс Drawing
abstract class DrawingClass
{
	abstract function Draw();		
}	

class BoxClass extends DrawingClass
{
	function Draw()
	{
		print "<br>Прямоугольник класса DrawingClass";		
	}
	
}	

class CircleClass extends DrawingClass
{
	function Draw()
	{
		print "<br>Круг класса DrawingClass";		
	}
	
}	


?>
		
