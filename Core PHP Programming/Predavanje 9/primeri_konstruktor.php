<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Primeri konstruktor</title>
	</head>
	
	<body>
		<?php 
			function __construct($par1, ..., $parN)
			{
				$this->at1 = $par1;
				...
				$this->atN = $parN;
			}
		?>
	</body>
</html>