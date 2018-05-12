<?php 
	if(isset($_POST["name"]) && isset($_POST["age"]))
	{
		echo "Welcome " . $_POST["name"] . "<br />";
		echo "You are " . $_POST["age"] . "years old.";
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="#" method="POST">
			Name: <input type="text" name="name" />
			<br>
			Age: <input type="texst" name="age" />
			<br>
			<input type="submit" />
			<br>
			<input type="reset" />
		</form>
	</body>
</html>