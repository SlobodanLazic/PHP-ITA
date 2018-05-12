<!DOCTYPE html>
<?php 
	session_start();
	if(isset($_SESSION["counter"]))
	{
		$_SESSION["counter"] += 1;
	}
	else 
	{
		$_SESSION["counter"] = 1;
	}
	
	$msg = "Posetili ste stranu " . $_SESSION["counter"] . ". put u trenutnoj sesiji.";
?>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Session</title>
	</head>
	<body>
	<?php 
		echo ($msg);
	?>
	</body>
</html>