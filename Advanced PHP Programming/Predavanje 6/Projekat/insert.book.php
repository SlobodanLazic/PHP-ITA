<?php
	require_once "modules/book/genreBL.class.php";
	
	$genresBL = new GenreBL();
	$genres = $genresBL->GetGenres();
	
	var_dump($genres);
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	</body>
</html>