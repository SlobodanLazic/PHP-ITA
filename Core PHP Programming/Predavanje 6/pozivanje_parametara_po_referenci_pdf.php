<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Prosledjivanje parametara po referenci pdf</title>
	</head>
	
	<body>
		<?php 
		function addFive($num)
		{
			$num += 5;
		}
		function addSix(&$num)
		{
			$num += 6;
		}
		$orignum = 10;
		addFive(/*&*/$orignum); // deprecation!!!!!!;
		echo "Original Value is $orignum <br>";
		addSix($orignum);
		echo "Original Value is $orignum <br>";
		?>
	</body>
</html>