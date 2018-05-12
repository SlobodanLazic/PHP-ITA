<?php
	if(session_id() === "")
	{
		session_start();
	}
	
	include_once("db/modules/UserDAL.class.php");
	
	class LoginBL
	{
		public function LoginUser()
		{
			$username = ISSET($_POST["username"]) ? trim($_POST["username"]) : "";
			$password = ISSET($_POST["password"]) ? trim($_POST["password"]) : "";
			
			if ($username != "" && $password != "")
			{
				$userDAL = new UserDAL();
				$user = $userDAL->GetUser($username, $password);
				if ($user != null)
				{
					$userDAL->UpdateLastLoginTime($user->GetID_KORISNIK());
					$this->SetUserObjectToSession($user);
					header("Location:home.php");
					exit;
				}
				return $user;
			}
		}
		
		private function SetUserObjectToSession($user)
		{		
				$_SESSION["user"] = serialize($user);
				$_SESSION["timeout"] = time();
		}
		
		private function GetUserObjectFromSession()
		{
			return unserialize($_SESSION["user"]);
		}
		
		public function CheckUserSessionData($current_page = "")
		{
			if (ISSET($_SESSION["user"], $_SESSION["timeout"]))
			{
				$inactive = 300; // 5minuta
				//$user = $this->GetUserObjectFromSession();
				$sessionTTL = time() - $_SESSION["timeout"];
				if ($sessionTTL > $inactive)
				{
					$this->Logout();
				}
				$_SESSION["timeout"] = time();
				if ($current_page == "login")
				{					
					header("Location:home.php");
					exit;
				}
			}
			else if ($current_page != "login")
			{
				$this->RedirectToLoginPage();
			}
		}
		
		public function Logout()
		{
			$this->ClearSessions();
			$this->RedirectToLoginPage();
		}
		
		private function ClearSessions()
		{
			UNSET($_SESSION["user"],$_SESSION["timeout"]);
		}
		
		private function RedirectToLoginPage()
		{
			header("Location:login.php");
			exit;
		}
	}