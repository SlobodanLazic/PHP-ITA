<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>substr_count()</title>
	</head>
	
	<body>
		<?php 
		$text = 'This is a test';
		echo substr_count($text, 'is'); // 2
		
		echo substr_count($text, 'is', 3); // 's is a test', 1
		
		echo substr_count($text, 'is', 3, 3); // 's i',0
		
		echo substr_count($text, 'is', 5, 10); // upozorenje, jer 5+10 > 14
		?>
	</body>
</html>