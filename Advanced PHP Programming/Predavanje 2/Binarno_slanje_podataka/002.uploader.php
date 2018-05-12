<?php 
	if(isset($_FILES["file"]))
	{
		printf("File has been sucesfully uploaded.");
	}
	else {
		printf("Upload a file");
	}
?>