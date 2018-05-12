<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Rekurzivna funkcija 2</title>
	</head>
	
	<body>
		<?php 
		$i = 3;
		rekurzija($i);
		
		function rekurzija($i)
		{
			
			if ($i > 0)
			{
				rekurzija($i-1);
			}
			else
			{
				return;
			}
			echo "<div>$i</div>";
		}
		
		
		?>
	</body>
</html>