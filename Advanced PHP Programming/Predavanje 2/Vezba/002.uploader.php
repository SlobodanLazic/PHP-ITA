<?php 
	
	if (isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_FILES["file"]))
	{
		$ime = trim($_POST["name"]);
	    $prezime = trim($_POST["lastname"]);
		$email = trim($_POST["email"]);
		
			if($ime != "" && $prezime != "" && $email != "")
			{
				$explodedcv = explode(".",$_FILES["file"]["name"]);
				$cvextension = end($explodedcv);
				$location = "CV/$ime.$prezime.$cvextension";
				
				if($_FILES["file"]["size"] <= 2048 * 1024 && $cvextension == "pdf" && $_FILES["file"]["type"] == "application/pdf")
				{
					move_uploaded_file($_FILES["file"]["tmp_name"], $location);
					echo "You have succefully applied for this job";
				}
				else if (file_exists($location))
				{
					printf("<p style='#FF0000'> You have already applied for this job </p>");
				}
			}
			else {
				echo("Fill out the required fields and upload CV(size of CV must be lesser than 2 mB");
				}
		
	}
	
?>