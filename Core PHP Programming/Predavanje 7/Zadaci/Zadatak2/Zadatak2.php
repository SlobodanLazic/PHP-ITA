<?php 
	if(isset($_POST["name"]) || isset($_POST["points"]) || isset($POST_["major"]) || isset($_POST["number"]) || isset($_POST["email"]))
	{
		foreach ($_POST["name"] as $name)
		{
			printf("Ime je %s . <br>", $name);
		}
		foreach ($_POST["points"] as $points)
		{
			printf("Osvojeni broj poena je %d . <br>", $points);
		}
		foreach ($_POST["major"] as $major)
		{
			printf("Glavni predmet je %s <br>", $major);
		}
		foreach ($_POST["number"] as $number)
		{
			printf("Moblni telefon je %d <br>", $number);
		}
		foreach ($_POST["email"] as $email)
		{
			printf("Email je %s <br>", $email);
		}
	}
?>