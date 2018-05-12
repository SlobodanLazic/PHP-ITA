<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>For petlja </title>
	</head>
	
	<body>
		<?php 
		$x=array("one","two","three");
		/*
		$x[] = "one";
		$x[] = "two";
		$x[] = "three";
		*/
		
		foreach ($x as $value)
		{
			echo $value . "<br>";
		}
		?>
	</body>
</html>