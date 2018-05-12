<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 4</title>
	</head>
	
	<body>
		<?php 
		/*echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;* *<br>";
		echo "&nbsp;&nbsp;&nbsp;* * * <br>";
		echo "&nbsp;&nbsp;* * * * <br>";
		echo "&nbsp;* * * * * <br>";
		*/
		$n = 5;
		for($i=0;$i<$n;$i++){
			for($j=0;$j<=$i;$j++){
				for($k=$n;$k>$j;$k--){
					echo "&nbsp";
				}
				echo "* ";
			}
			printf("<br>");
		}
		
		?>
	</body>
</html>