<?php 
	$allowedExts = array("jpg","jpeg", "gif","png");
	$explodedArray = explode(".", $_FILES["file"]["name"]);
	$extension = end($explodedArray);
	$allowedTypes = array("image/gif","image/jpeg","image/png", "image/pjpeg");
	$imageType = $_FILES["file"]["type"];
	
	if (
		in_array($imageType, $allowedTypes)
		&& ($_FILES["file"]["size"] < 100 * 1024)
		&& in_array($extension, $allowedExts)
		)
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
		}
		else
		{
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . "kB <br>";
			echo "Stored in: " . $_FILES["file"]["tmp_name"] . "<br>";
			
			$filePath = "upload/" . $_FILES["file"]["name"];
			if (file_exists($filePath))
			{
				printf("<p style='color: #FF0000;'>" . $_FILES["file"]["name"] . " already exists. </p>");
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"], $filePath);
				echo "Stored in: $filePath";
			}
		}
	}
	else
	{
		echo "Neispravna datoteka";
	}
	
	/* jpg datoteke se drugacije prepoznaju od razl pregledaca: IE:pjpeg FF:jpeg */
?>