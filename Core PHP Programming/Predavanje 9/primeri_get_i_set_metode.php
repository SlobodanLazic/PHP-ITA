<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Primeri</title>
	</head>
	
	<body>
		<?php 
			class ClassExample
			{
				var $parExample;
				[...]
				function SetMethod($param)
				{
					$this->parExample = $param;
				}
				
				function GetMethod()
				{
					echo $this->parExample;
				}
			}
		?>
	</body>
</html>