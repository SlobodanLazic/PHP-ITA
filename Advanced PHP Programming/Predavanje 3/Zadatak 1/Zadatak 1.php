<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 1</title>
	</head>
	<body>
		<?php 
			$filename = "pera.txt";
			$handle = @fopen($filename , "r");
			if ($handle)
			{
				$filesize = filesize($filename);
				$content = fread($handle,$filesize);
				@fclose($handle);
			}
			else
			{
				echo "Doslo je do greske";
			}
			
			printf("<p>Datoteka: %s %d<p>%s</p></p>", $filename, $filesize, $content);
		?>	
	</body>
</html>