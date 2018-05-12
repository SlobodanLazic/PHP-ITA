<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>str_replace()</title>
	</head>
	
	<body>
		<?php 
		$old = "Peter";
		$new = "Jessica";
		$string = "Peter and Jessica";
		printf(str_replace($old,$new,$string));
		
		?>
	</body>
</html>