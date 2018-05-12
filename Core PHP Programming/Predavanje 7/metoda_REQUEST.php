<?php 
	if(isset($_REQUEST["name"]) && isset($_REQUEST["age"]))
	{
		echo "Welcome " . $_REQUEST["name"] . "<br />";
		echo "You are " . $_REQUEST["age"] . " years old";
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="#" method="REQUEST">
			Name:<input type="text" name="name" />
			<br>
			Age: <input type="text" name="age" />
			<br>
			<input type="submit" />
			<br>
			<input type="reset" />
		</form>
	</body>
</html>