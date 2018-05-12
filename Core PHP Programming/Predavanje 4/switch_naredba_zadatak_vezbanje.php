<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Switch naredba</title>
	</head>
	
	<body>
		<?php 
		$color = "black";
		switch($color)
		{
			case "black":
				echo "#000000";
				break;
			case "green":
				echo "#00FF00";
				break;
			case "red":
				echo "#FF0000";
				break;
			case "grey":
				echo "#808080";
				break;
			default:
				echo "Find RGB code online";
		}
		?>
	</body>
</html>