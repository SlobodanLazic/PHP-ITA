<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Konkatenacija</title>
	</head>
	
	<body>
		<?php 
		$tekst1="Zdravo, svete!";
		$tekst2="Danas je lep dan! ";
		echo $tekst1 . $tekst2;
		echo "<br>";
		echo $tekst1 . " " . $tekst2;
		//bez konkatenacije: echo "$tekst1 $tekst2";
		?>
		
		<!-- Zdravo, svete!Danas je lep dan!-->
		<!-- Zdravo, svete! Danas je lep dan! -->
	</body>
</html>