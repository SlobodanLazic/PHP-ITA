<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Funkcija_random_zadatak1</title>
	</head>
	
	<body>
		<?php 
		for($i=0;$i<100;$i++)
		{
			$array[] = mt_rand(1,3);
		}
		/*--------------------------*/
		
		printf("Numbers from array that are divisible by 3:<br>");
				
		foreach($array as $k=>$i)
		{
			if ($i % 3 == 0)
			{
				echo "$i <br>";
			}
		}
		printf("Average value: <br>");
		$elements = 100;
		foreach ($array as $i=>$j)
		{
			$sum = 0 + $j;
		}
		printf($sum / $elements . "<br>");

		echo "All numbers of array:" . "<br>";
		foreach($array as $i=>$j)
		{
			echo "Position $i.  Number $j <br>";
		}
		?>
	</body>
</html>