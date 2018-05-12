<?php
	if(session_id() === "")
	{
		session_start();
	}
	require_once("modules/user/loginbl.class.php");
	$loginBL = new LoginBL();
	$loginBL->CheckUserSessionData();
	
	echo "ulogovan";
?>

	<a href="logout.php">Logout</a>