<?php 
	if(session_id() === "")
	{
		session_start();
	}
	
	require_once("modules/user/loginbl.class.php");
	
	$loginBL = new LoginBL();
	$loginBL->Logout();
?>