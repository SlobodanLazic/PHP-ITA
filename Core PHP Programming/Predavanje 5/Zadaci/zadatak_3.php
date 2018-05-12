<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 3</title>
	</head>
	
	<body>
		<?php 
		/*echo "&nbsp;* * * * * <br>";
		echo "&nbsp;&nbsp;* * * * <br>";
		echo "&nbsp;&nbsp;&nbsp;* * * <br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;* * <br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*  <br>";
		*/
		$n=5;
		for($i=0;$i<$n;$i++){
			for($j=$i;$j<$n;$j++)
			{	
				for($k=$n;$k>=$n && $k<$n+$j;$k++){
					echo "&nbsp;";
				}
			echo "* ";
			}
			printf("<br>");
		}
		?>
	</body>
</html>