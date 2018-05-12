<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Switch naredba</title>
	</head>
	
	<body>
		<?php 
		$e = 3;
		
		switch($e%3)
		{
		case 1:
		case 2:
			echo "Broj $e nije deljiv sa 3";
			break;
		default:
			echo "Broj $e je deljiv sa 3";
			break;
		}
		
		/* kraci nachin
		$e = 3;
		switch($e % 3)
		{
			case 0:
				echo "Broj $e je deljiv sa 3";
				break;
			default:
				echo "Broj $e nije deljiv sa 3";
		}
		*/
		?>
	</body>
</html>