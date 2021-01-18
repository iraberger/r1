<?php
namespace main;

class BoxClass 
{
	public function Draw()
	{
		print "<br>Прямоугольник";		
	}
	
}	

class RedBoxClass extends BoxClass
{
	public $size;

	public function __construct() 
	{
       $this->size= 50;
	}

	public function SetSize($size)
	{
		$this->size = $size;		
	}

	public function GetSize()
	{
		return $this->size;		
	}

	public function Draw()
	{
		print "<h3>Красный квадрат:</h3>";
		print "<img src='drawredbox.php?size=100'>";
	}
	
}

class CircleClass 
{
	function Draw()
	{
		print "<br>Круг";		
	}
}	


// Базовый класс
class MainClass
{
	public $text; // открытое свойство класса
	private $price; // закрытое свойство класса
	
	// Открытый метод класса
	public function OutText()
	{
		print $this->text;		
	}		
	
	public function __construct() 
	{
       $this->text = "Распродажа";
       print '<br>Конструктор класса ' . __CLASS__;
	}

	public function __destruct()
	{ 
       print '<br>Деструктор класса ' . __CLASS__;
	}	

	// Сеттер
	public function SetPrice($price)
	{
		$this->price = $price;		
	}

	// Геттер
	public function GetPrice()
	{
		return $this->price;		
	}


}

class ChildClass extends MainClass
{
	private $discount; // закрытое свойство класса
	
	// Полиморфизм
	public function OutText()
	{
		print "<p style=color:red>" . $this->text . "</p>";
	}		
	
	public function __construct() 
	{
       parent::__construct(); // Вызов родительского конструктора
       print '<br>Конструктор класса ' . __CLASS__;
	}

	public function __destruct()
	{ 
       print '<br>Деструктор класса ' . __CLASS__;
	}	
}

?>
