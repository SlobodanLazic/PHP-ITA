<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 2</title>
	</head>
	
	<body>
		<?php 
			class Book
			{
				private $price;
				private $title;
				
				public function GetPrice()
				{
					return $this->$price;
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
		?>
	</body>
</html>