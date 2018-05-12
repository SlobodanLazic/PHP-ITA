<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Unset()</title>
	</head>
	
	<body>
		<?php 
		$a = 5;
		$b = "hey";
		$c = true;
		$d = null;
		
		unset($a);
		
		printf($b . $a);
		?>
	</body>
</html>