<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 5</title>
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
			
			$books ["math"] = $math;
			$books ["physics"] = $physics;
			$books ["chemistry"] = $chemistry;
		
		printf(
		"
		<table border='1'>
			<tr style='background:#3333FF'>
				<th>Naziv objekta</th>
				<th>Vrednost atributa price</th>
				<th>Vrednost atributa title</th>
			</tr>
			");
		
		$counter = 1;
		foreach($books as $name => $book)
		{
			printf(
			"
			
			<tr style='background:%s;'>
				<td>%s</td>
				<td>%d</td>
				<td>%s</td>
			</tr>			
			",
				$counter % 2 == 0 ? "#3333FF" : "#FFFFFF",
				$name,
				$book->GetPrice(),
				$book->GetTitle()
			);
			$counter++;
		}
		
		printf("</table>");		
		?>
	</body>
</html>