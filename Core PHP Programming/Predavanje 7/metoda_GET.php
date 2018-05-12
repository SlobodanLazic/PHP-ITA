<?php
	if(isset($_GET["name"]) && isset($_GET["age"]))
	{
		echo "Welcome " . $_GET['name'] . "<br />";
		echo "You are " . $_GET['age'] . "years old.";
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="#" method="GET">
			Name: <input type="text" name="name" />
			<br>
			Age: <input type="text" name="age" />
			<br>
			<input type="submit" /> 
			<br/>
			<input type="reset" />	
		</form>
	</body>
</html>