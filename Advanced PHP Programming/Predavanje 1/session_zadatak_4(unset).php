<!DOCTYPE html>
<?php 
	session_start();
	if(!isset($_SESSION["broj"]))
	{
		$_SESSION["broj"] = 1;
	}
	else 
	{
		$_SESSION["broj"]++;
	}
	session_destroy();
?>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Session</title>
	</head>
	<body>
	<?php 
		echo $_SESSION["broj"];
	?>
	</body>
</html>