<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Download</title>
	</head>
	<body>
		<?php 
		$location = "CV/";
		$listed = scandir($location);
		
		foreach($listed as $cv)
		{
			if (strlen($cv) > 2)
			{
				printf("<p>%s</p>", $cv);
			}
		}
		
		//var_dump($listed);
		/*
		
		if(isset($_POST["submit"]))
		{
			foreach ($listed as $cv)
			{
			header('Pragma: public');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Cache-Control: private', false);
			header('Content-Type: application/pdf');
			
			header('Content-Disposition: attachment; filename= ' . basename($cv) . '');
			header('Content-Transfer-Encoding: binary');
			header('Content-Length: ' . filesize($cv));
			
			readfile($cv);		
			}
		}
		*/
		?>
		 <form action="#" method="post">
			<input type="submit" name="submit" value="Download">
		</form>
	</body>
</html>