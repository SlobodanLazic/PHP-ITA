<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>For petlja predavanja 2</title>
	</head>
	
	<body>
		<?php 
		$niz [] = 1;
		$niz [] = 5;
		$niz [] = 17;
		
		for($c=0;$c < count($niz);$c++)
		{
			if($c ==0)
				echo current($niz) . "<br>";
			else
				echo next($niz) . "<br>";
		}
		?>
	</body>
</html>