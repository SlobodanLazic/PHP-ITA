<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 9</title>
	</head>
	
	<body>
		<?php 
		$n = 10;
		$m = 10;
		echo "<table border=\"1px\">";
		for($i=1;$i<=$n;$i++){
			echo "<tr>";
			for($j=1;$j<=$m;$j++){
				echo "<td>";
				echo $i*$j;
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		?>
	</body>
</html>