<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 3</title>
	</head>
	
	<body>
		<?php 
		
		$num = 12345;
		
		$mod = $num % 10;
		/*echo $mod . "<br>";
		$num = $num - $mod;
		$num = $num / 10;
		$mod = $num % 10;
		echo $mod . "<br>";
		$num = $num - $mod;
		$num = $num / 10;
		$mod = $num % 10;
		echo $mod . "<br>";
		$num = $num - $mod;
		$num = $num / 10;
		$mod = $num % 10;
		echo $mod . "<br>";
		$num = $num - $mod;
		$num = $num / 10;
		$mod = $num % 10;
		echo $mod . "<br>";
		$num = $num - $mod;
		$num = $num / 10;*/
		
		
		
		/*function reversing()
		{
			if($num>0)
			{
				$reversing()
			}
			else
			{
				return;
			}
		}*/
		
		for($i=0;$mod > $i;$i++)
		{
			echo $mod;
			$num = $num - $mod;
			$num = $num / 10;
			$mod = $num % 10;
		
		}
		
		
		?>
	</body>
</html>