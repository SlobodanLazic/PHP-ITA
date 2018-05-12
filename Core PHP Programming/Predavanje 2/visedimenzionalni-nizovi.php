<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Višedimenzionalni nizovi</title>
	</head>
	
	<body>
		<?php 
			$families = array
				(
					"Griffin"=>array
						(
						"Peter",
						"Lois",
						"Megan"
						),
					"Quagmire"=>array
						(
						"Glen"
						),
					"Brown"=>array
						(
						"Cleveland",
						"Loretta",
						"Junior"
						)
			  );
			  echo "Is " . $families['Griffin'][2] . " a part of the Griffin family?";
		?>
	</body>
</html>