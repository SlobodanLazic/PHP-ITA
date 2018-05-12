<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 02</title>
	</head>
	
	<body>
		<?php 
		$name = "Marko";
		$lastName = "Stojićević";
		$fullName = $name . " " . $lastName;
		
		echo "<strong>Ime i prezime: </strong> $fullName <br>";
		echo "<strong>Dužina imena: </strong>" . strlen($name) . "<br>";
		echo "<strong>Pozicija na kojoj počinje prezime:</strong>" . strpos($fullName, $lastName);
		?>
	</body>
</html>