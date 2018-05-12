<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>If naredba</title>
	</head>
	
	<body>
		<?php 
		$password = "hey";
		$password2 = "str";
		
		$username = "Zloba";
		
		$password_length = strlen($password);
		$username_length = strlen($username);
		
		if ($password == $password2)
		{
			echo "True password";
		}
		else	{
			echo "False password";
		}
		if ($password_length > 7)
		{
			echo "Longer than 7 characters.";
		}
		else
		{
			echo "Not longer than 7 characters.";
		}
		if ($username_length >= 5 && $username_length <= 10)
		{
			echo "Username is btw 5 and 10 characters.";
		}
		else
		{
			echo "Username is not btw 5 and 10 characters.";
		}
		?>
	</body>
</html>