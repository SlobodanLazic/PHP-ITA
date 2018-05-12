<?php
	if(session_id() === "")
	{
		session_start();
	}
	require_once("modules/user/loginbl.class.php");
	$loginBL = new LoginBL();
	$loginBL->CheckUserSessionData();
	
	echo "ulogovan";
	printf("<div><a href='%s'>Pregled knjiga</a></div>
			<div><a href='%s'>Unos knjiga</a></div>",
			"books.php", "insert.book.php");
?>

	<a href="logout.php">Logout</a>