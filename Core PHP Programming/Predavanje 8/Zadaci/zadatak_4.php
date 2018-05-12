<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 4</title>
	</head>
	
	<body>
		<?php 
			class Book
			{
				private $price;
				private $title;
				
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
			
			$math = new Book();
			$math->SetPrice(1450);
			$math->SetTitle("Algebra");
			
			$physics = new Book();
			$physics->SetPrice(1290);
			$physics->SetTitle("Physics for High School");
			
			$chemistry = new Book();
			$chemistry->SetPrice(999);
			$chemistry->SetTitle("Advanced Chemistry");
			
			printf( 
			"Cena: %d. Knjiga: %s <br>",
			$math->GetPrice(),
			$math->GetTitle()
			);
			printf(
			"Cena: %d. Knjiga: %s <br>",
			$physics->GetPrice(),
			$physics->GetTitle()
			);
			printf(
			"Cena: %d. Knjiga: %s <br>",
			$chemistry->GetPrice(),
			$chemistry->GetTitle()
			);
		?>
	</body>
</html>