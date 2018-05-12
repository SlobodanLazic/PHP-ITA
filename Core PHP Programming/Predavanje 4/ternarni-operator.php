<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Terarni operator</title>
	</head>
	
	<body>
		<?php 
		$broj = 5;
		echo $broj % 2 == 0 ? "Deljiv" : "Nije deljiv";
		
		// radi bolje čitljivost, poželjno je dodati zagrade za razdvajanje izraza
		// echo ($broj % 2 == 0) ? "Deljiv" : "nije deljiv";
		?> 
		
	</body>
</html>