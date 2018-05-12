<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>If naredba ternarni</title>
	</head>
	
	<body>
		<?php 
		$password1 = "hey"; // uneta
		$password2 = "str"; // odgovarajuca
		$username = "Zloba";
		
		$username_length = strlen($username);
		$password_length = strlen($password2);
		
		if ($password1 == $password2)
		{
			echo "Password correct";
		}
		else
		{
			echo "Password is not correct";
		}
		if ($password_length > 7)
		{
			echo "Password is longer than 7 characters.";
		}
		else
		{
			echo "Password is not longer than 7 characters.";
		}
		if ($username_length >= 5 && $username_length <= 10)
		{
			echo "Username is between 5 and 10 characters";
		}
		else
		{
			echo "Username is not between 5 and 10 characters";
		}
		
		/* 
			$password1 = "hey"; // uneta
		$password2 = "str"; // odgovarajuca
		$username = "Zloba";
		
		$username_length = strlen($username);
		$password_length = strlen($password2)
		
		echo ($password1 == $password2) ? "Password correct" : "Password correct";
		echo ($password_length > 7) ? "Password is longer than 7 characters." : "Password is not longer than 7 characters.";
		echo ($username_length >= 5 && $username_length <= 10) ? "Username is between 5 and 10 characters" : "Username is not between 5 and 10 characters";
		*/
		?>
	</body>
</html>