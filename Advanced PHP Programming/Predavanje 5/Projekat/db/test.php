<?php
	
	include_once("db.class.php");
	
	$query = "SELECT * FROM KORISNIK";
	$result = DBConn::Select($query);
	
	var_dump($result);
	
?>