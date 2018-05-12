<!DOCTYPE html>
<?php 
	setcookie("name","Pera Peric", time()+ 3600, "/","", 0);
	setcookie("age","36", time()+ 3600, "/","", 0);
	setcookie("TestCookie","", time() + 3600, "/~rasmus/","example.com", 1);
?>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Acessing Cookies with PHP</title>
	</head>
	<body>
		<?php 
			echo $_COOKIE["name"] . "<br>";
			/* ili */
			echo @$_HTTP_COOKIE_VARS["name"] . "<br>";
			echo $_COOKIE["age"] . "<br>";
			/* ili */
			echo @$_HTTP_COOKIE_VARS["age"] . "<br>";
		?>	
	</body>
</html>