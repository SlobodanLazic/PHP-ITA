<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 2</title>
	</head>
	
	<body>
		<?php 
			$atacka ["x1"] = 1;
			$atacka ["y1"] = 1;
			$btacka ["x2"] = 3;
			$btacka ["y2"] = 3;	
			$xrastojanje = $btacka ["x2"] - $atacka ["x1"];
			$yrastojanje = $btacka ["y2"] - $atacka ["y1"];
			
		function rastojanje(&$tacke)
		{
			global $xrastojanje;
			global $yrastojanje;
			$tacke = sqrt(pow($xrastojanje, 2) + pow($yrastojanje, 2));
			echo $tacke;
		}
		
		rastojanje($tacke);
		?>
	</body>
</html>