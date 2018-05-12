<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>fread</title>
	</head>
	<body>
		<?php 
			$handle = @fopen("002.txt", "r");
			if ($handle)
			{
				while (($buffer = fgets($handle, 4096)) !== false)
				
				{
					echo $buffer;
				}
				if (!feof($handle))
				{
					echo "Error: unexpected fgets() fail\n";
				}
				fclose($handle);
			}
			
		?>	
	</body>
</html>