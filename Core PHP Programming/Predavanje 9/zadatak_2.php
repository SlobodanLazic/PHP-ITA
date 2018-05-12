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
				
				public function  __construct($price,$title)
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
			
			class Novel extends Book 
			{
				private $publisher;
				
				public function GetPublisher()
				{
					return $this->publisher;
				}
				
				public function SetPublisher($publisher)
				{
					$this->publisher = $publisher;
				}
			}
		?>
	</body>
</html>