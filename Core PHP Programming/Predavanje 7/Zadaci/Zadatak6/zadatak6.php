<?php
	
	$firstnamelength = strlen($_POST["firstname"]); 
	$lastnamelength = strlen($_POST["lastname"]);
	$email = explode("@",$_POST["email"]);
	$username = strlen($email[0]);
	
	if(isset($_POST["firstname"],$_POST["lastname"],$_POST["email"]))
	{
		if($firstnamelength >= 2 && $firstnamelength <= 10 && $lastnamelength >= 2 && $lastnamelength <= 10 && $username >= 3)
		{
			echo "Welcome,dear customer!!!";
			exit();
		}	
	}

?>