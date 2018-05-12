<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>For petlja predavanja</title>
	</head>
	
	<body>
		<?php 
		for ($i =1; $i<=3; $i++)
		{
			for ($j=1; $j<=3; $j++)
				echo "$i * $j = " . $i*$j . " &nbsp;&nbsp;";
			echo "<br>";
		}
		?>
	</body>
</html>