<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Podrazumevane vrednosti parametara pdf</title>
	</head>
	
	<body>
		<?php 
		function printMe($param = NULL)
		{
			print $param;
		}
		printMe("This is test");
		printMe();
		?>
	</body>
</html>