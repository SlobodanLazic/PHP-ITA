<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zivotni vek promenljivih pdf</title>
	</head>
	
	<body>
	<?php 
	function AddNumbers()
	{
		global $sum;// pokrenuti primer bez ključne reči global
		$sum = 2 + 2;
	}
	
	$sum = 0;
	AddNumbers();
	echo "2 + 2 = " . $sum;
	?>
	
	</body>
</html>