<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>If naredba</title>
	</head>
	
	<body>
		<?php 
		$x = 5;
			if($x) {
				echo "PHP obezbedjuje implicitnu konverziju tipa u bool";
			}
			else {
				echo "PHP ne obezbedjuje implicitnu konverziju tipa u bool";
			}
		?>
	</body>
</html>