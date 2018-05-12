<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 1</title>
	</head>
	
	<body>
		<?php 
			class Book
			{
				private $price;
				private $title;
				
				public function __construct($price,$title)
				{
					$this->price = $price;
					$this->title = $title;
				}
				
				public function GetPrice()
				{
					return $this->price;
				}
				public function SetPrice($price)
				{
					$this->price = $price;
				}
				public function GetTitle()
				{
					return $this->title;
				}
				public function SetTitle($title)
				{
					$this->title = $title;
				}
			}
			
			$math = new Book (1450,"Algebra");
			$physics = new Book (1290,"Physics for High School");
			$chemistry = new Book (999, "Advanced Chemistry");
		?>
	</body>
</html>