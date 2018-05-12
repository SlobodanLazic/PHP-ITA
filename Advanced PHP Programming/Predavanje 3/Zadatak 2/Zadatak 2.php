<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 2</title>
	</head>
	<body>
		<?php 
			$filename = "pera.txt";
			$handle = fopen($filename, 'w+');
			if ($handle !== false)
			{
				$written = fwrite($handle, "pera");
				if (file_exists($filename))
				{
					$filesize = filesize($filename);
					$content = fread($handle, $filesize);
					fclose($handle);
				}
				printf("Naziv datoteke: %s;Velicina datoteke: %d", $filename, $filesize);
			}
			else
			{
				echo "Error.";
			}
		?>	
	</body>
</html>