<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Asocijativni nizovi</title>
	</head>
	
	<body>
		<?php 
			$ages = array("Peter"=>32,"Quagmire"=>30,"Joe"=>34);
			
				//Ili
				
			$ages['Peter'] = "32";
			$ages['Quagmire'] = "30";
			$ages['Joe'] = "34";
			
			echo "Peter is " . $ages['Peter'] . " years old.";
			
			//Peter is 32 years old.
		?>
	</body>
</html>