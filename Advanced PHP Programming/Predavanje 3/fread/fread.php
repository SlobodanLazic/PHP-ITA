<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>fread</title>
	</head>
	<body>
		<?php 
			$filename = "002.txt";
			$handle = fopen($filename, "r");
			$contents = fread($handle, filesize($filename));
			fclose($handle);
			echo $contents;
		?>	
	</body>
</html>