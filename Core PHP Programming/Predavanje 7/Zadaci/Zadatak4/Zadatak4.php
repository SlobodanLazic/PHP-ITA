<?php
		if(empty($_POST["number"]))
		{
			echo("You have never been in a Norway");
		}
		else
		{
			foreach ($_POST["number"] as $num)
			{
				echo $num . " &nbsp;";
			}
		}
		
	
	
	
	
?>