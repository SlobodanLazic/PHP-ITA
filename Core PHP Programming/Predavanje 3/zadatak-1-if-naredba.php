<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>If naredba</title>
	</head>
	
	<body>
		<?php 
		$dan = date("D");
		
		if ( $dan == "Sat")
		{
			echo "Danas je prvi dan vikenda.";
		}
		else if ($dan != "Sat" && $dan != "Sun")
		{
			echo "Danas je radni dan.";
		}
		else
		{
			echo "Danas je drugi dan vikenda";
		}
		?> 
		
	</body>
</html>