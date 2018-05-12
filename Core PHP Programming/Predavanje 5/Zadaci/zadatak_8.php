<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="style.css" type="text/css" rel="stylesheet">
		<title>Zadatak 8</title>
	</head>
	
	<body>
		<?php 
		$n = 8;
		printf("<div class=\"tab\">");
		for($i=1;$i<=8;$i++) {
			echo "<div id=\"row\">";
			for($j=1;$j<=8;$j++)
			{
				if($j % 2 == 1 && $i % 2 == 0){
					printf("<div class=\"colblack\"></div>");
				}
				else if($j % 2 == 0 && $i % 2 == 1){
					printf("<div class=\"colblack\"></div>");
				}
				else{
					printf("<div id=\"colwhite\"></div>");
				}
			}
			echo "</div>";
		}
		printf("</div>");
		?>
	</body>
</html>