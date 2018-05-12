<?php
	if(session_id() === "")
	{
		session_start();
	}
	
	require_once("modules/user/loginbl.class.php");
	
	$loginBL = new LoginBL();
	$loginBL->CheckUserSessionData("login");
	
	if (ISSET($_POST["username"], $_POST["password"]))
	{
		$test = $loginBL->LoginUser();
		
		if ($test == null)
		{
			echo "<h1 style='color:red;'>Greska!</h1>";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link href="css/style.css" type="text/css" rel="stylesheet">
		<title>Login</title>	
		<script src="js/validacija.js">
			
		</script>
	</head>
	<body>
		<div id="login-box">
			<form action="login.php" method="POST" name="login" id="form_login" onsubmit="return IsFormValid()">
				<div class="sp_20">
					<div class="txt_left ft_bold">
						Username:
					</div>
					<div class="txt_left sp_5">
						<input type="text" name="username" id="username" class="input_txt_lg" onblur="blurUsername()"/>
					</div>
					<div>
						<span id="usernameSpan" class="ft_small ft_red">
						</span>
					</div>
				</div>
				<div class="sp_20">
					<div class="txt_left ft_bold">
						Password:
					</div>
					<div class="txt_left sp_5">
						<input type="password" name="password" id="password" class="input_txt_lg" onblur="blurPassword()"/>
					</div>
					<div>
						<span id="passwordSpan" class="ft_small ft_red">
						</span>
					</div>
				</div>
				<div class="sp_40">
					<div class="txt_left">
						<input type="submit" name="btnSubmit" value="Log In" class="input_sbmt_lg"/>
					</div>
				</div>
			</form>
			<div class="wrap10 txt_center ft_small">
				KIP &copy; 2017
			</div>
		</div>
	</body>
</html>