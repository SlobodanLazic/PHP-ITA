<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak funkcija_za_rad_sa_stringovima </title>
	</head>
	
	<body>
		<?php 
		$email = "example@gmail.com";
		$array = explode("@",$email);
		$username = $array[0];
		$usernamelength = count($username);
		
		if ($username >= 5 && $username <= 10)
		{
			echo "Username is between 5 and 10 characters.";
		}
		else 
		{
			printf("Username is between 5 and 10 characters.");
		}
		$array2 = explode("x",$username);
		echo is_numeric($array2[0]) . "<br>";
		
		printf(strpos($array[1], ".com") . "<br>");
		
		$array3 = explode(".", $array[1]);
		$numofelem = count($array3);
		if ($array3[$numofelem - 1] == "com"){
			printf("com is a part of an email <br>");
		}
		else {
			echo "com is not a part of an email";
		}
		?>
	</body>
</html>