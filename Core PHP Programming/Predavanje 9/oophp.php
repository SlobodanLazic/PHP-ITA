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
	
	//var_dump($math);
	
	printf("
		Knjiga: %s. Cena: %d RSD <br>
		Knjiga: %s. Cena: %d RSD <br>
		Knjiga: %s. Cena: %d RSD <br>
	",
		$math->GetTitle(),
		$math->GetPrice(),
		$physics->GetTitle(),
		$physics->GetPrice(),
		$chemistry->GetTitle(),
		$chemistry->GetPrice());
		
	$books["math"] = $math;
	$books["physics"] = $physics;
	$books["chemistry"] = $chemistry;
		
	printf("
		<table style='border: 1px solid blue'>
			<tr style='background: #FFFFFF;'>
				<td><strong>Naziv objekta</strong></td>
				<td><strong>Vrednost atributa price</strong></td>
				<td><strong>Vrednost atributa title</strong></td>
			</tr>
	");
	$counter = 1;
	foreach($books as $name => $book)
	{
		printf("
			<tr style='background: %s;'>
				<td>%s</td>
				<td>%d</td>
				<td>%s</td>
			</tr>
		",
			$counter % 2 != 0 ? "#3333FF" : "#FFFFFF",
			$name,
			$book->GetPrice(),
			$book->GetTitle());
		$counter++;
	}
	printf("</table>");	
		
		
		
?>

<!--
<table style='border: 1px solid blue'>
	<tr style="background: #FFFFFF;">
		<td><strong>Naziv objekta</strong></td>
		<td><strong>Vrednost atributa price</strong></td>
		<td><strong>Vrednost atributa title</strong></td>
	</tr>
	<tr style="background: #3333FF;">
		<td>math</td>
		<td><?php echo $math->GetPrice(); ?></td>
		<td><?php echo $math->GetTitle(); ?></td>
	</tr>
	<tr style="background: #FFFFFF;">
		<td>physics</td>
		<td><?php echo $physics->GetPrice(); ?></td>
		<td><?php echo $physics->GetTitle(); ?></td>
	</tr>
	<tr style="background: #3333FF;">
		<td>chemistry</td>
		<td><?php echo $chemistry->GetPrice(); ?></td>
		<td><?php echo $chemistry->GetTitle(); ?></td>
	</tr>
</table>

-->




















