<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Dinamicki poziv funkcija</title>
	</head>
	
	<body>
		<?php 
		function sayHello()
		{
			echo "Hello <br>";
		}
		$function_holder = "sayHello";
		$function_holder();
		?>
	</body>
</html>