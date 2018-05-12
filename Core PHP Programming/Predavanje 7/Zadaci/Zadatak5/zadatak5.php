<?php 
	
	if(isset($_POST["numbers"]) && isset($_POST["names"]) && isset($_POST["choices"][0]))
	{
		$age = $_POST["numbers"][0]
	}
	else
	{
		print("Fill out the form");
	}
	
?>
