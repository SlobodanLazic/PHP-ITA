<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 3</title>
	</head>
	
	<body>
		<?php 
			class Book
			{
				private $price;
				protected $title;
				
				public function __construct($title,$price)
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
				
				public function __construct($title, $price, $publisher)
				{
					$this->title = $title;
					$this->price = $price;
					$this->publisher = $publisher;
				}
				
				public function GetPublisher()
				{
					return $this->publisher;
				}
				
				public function SetPublisher($publisher)
				{
					$this->publisher = $publisher;
				}
			}
			
			$novel = new Novel("amoaz", 99999, "Laguna");
			echo $novel->GetTitle();
			
			echo $novel->GetPublisher();
		?>
	</body>
</html>