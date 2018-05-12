<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 7</title>
	</head>
	
	<body>
		<?php 
		$n = 8;
		printf("<table border=\"1\">");
		for($i=1;$i<=8;$i++) {
			echo "<tr>";
			for($j=1;$j<=8;$j++)
			{
				if($j % 2 == 1 && $i % 2 == 0){
					printf("<td bgcolor=\"#000000\" height=\"10px\" width=\"10px\"></td>");
				}
				else if($j % 2 == 0 && $i % 2 == 1){
					printf("<td bgcolor=\"#000000\" height=\"10px\" width=\"10px\"></td>");
				}
				else{
					printf("<td bgcolor=\"#FFFFFF\" height=\"10px\" width=\"10px\"></td>");
				}
			}
			echo "<tr>";
		}
		printf("</table>");
		?>
	</body>
</html>