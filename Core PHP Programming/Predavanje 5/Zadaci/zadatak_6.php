<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 6</title>
	</head>
	
	<body>
		<?php 
		$n = 3;
		$m = 4;
		echo "<table border=\"1\">";
		for($i=1;$i<=$n;$i++){
			echo "<tr>";
			for($j=1;$j<=$m;$j++){
				echo "<td>";
				echo "$i * $j = " . $i * $j . "&nbsp;&nbsp;";		
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		?>
	</body>
</html>