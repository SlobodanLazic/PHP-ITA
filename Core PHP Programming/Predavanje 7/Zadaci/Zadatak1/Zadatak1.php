<?php 
	if(isset($_POST["name"], $_POST["points"]))
	{
		printf("Student %s je osvojio %d poena. ", $_POST["name"], $_POST["points"]);
	}
?>