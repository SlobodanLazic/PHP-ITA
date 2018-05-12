<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Str_replace_zadatak3</title>
	</head>
	
	<body>
		<?php 
		$emails[] = "dtr@gmail.rs";
		$emails[] = "fwk@gmail.yu";
		$emails[] = "aes@gmail.yu";
		
		$rs = str_replace("yu","rs",$emails);
		
		print_r($rs);
		
		for($i=0;$i<count($emails);$i++)
		{
			$emails[$i]=str_replace(".yu",".rs",$emails[$i]);
		}
		print_r($emails);
		?>
	</body>
</html>