<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 2</title>
	</head>
	<body>
	
		<form action="action.php" method="_POST">
			Do you want to get e-mail notification?
			Yes<input type="radio" name="radio" value="yes">
			<?php printf($radio1); ?>
			No<input type="radio" name="radio" value="no">
			<?php printf($radio2); ?>
			<input type="submit" name="submit" value="select a radio button">
		</form>
		<?php 
		
		?>	
	</body>
</html>