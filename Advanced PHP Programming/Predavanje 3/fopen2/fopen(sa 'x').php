<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>fopen()</title>
	</head>
	<body>
		<?php 
			@$handle = fopen("somefile2.txt", "x");
			if($handle === false)
			{
				echo "Doslo je do greske prilikom otvaranja datoteke";
			}
			@fclose($handle);
		?>	
	</body>
</html>