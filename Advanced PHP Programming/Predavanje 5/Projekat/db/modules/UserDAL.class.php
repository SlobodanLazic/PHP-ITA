<?php
	
	include_once("db/classes/UserDM.class.php");
	include_once("db/db.class.php");
	
	class UserDAL
	{
		public function GetUser($username,$password)
		{
			$query = sprintf("	SELECT
									k.ID_KORISNIK,
									k.USERNAME,
									k.PASSWORD,
									k.EMAIL,
									k.POSLEDNJE_LOGOVANJE,
									k.ID_STATUS
									FROM
										KORISNIK k
									WHERE
										k.ID_KORISNIK = '%s'
										AND k.PASSWORD = '%s'
						", $username, $password);
			$userResult = DBConn::Select($query);
			
			$user = new UserDM();
			
			if ($userResult != null && is_array($userResult) && count($userResult) == 1)
			{
				$user = new UserDM();
				$userArray = $userResult[0];
				$user->SetUser($userArray["ID_KORISNIK"],
								$userArray["USERNAME"],	
								$userArray["PASSWORD"],	
								$userArray["EMAIL"],	
								$userArray["POSLEDNJE_LOGOVANJE"],	
								$userArray["ID_STATUS"]	
						);
			}
			
			return isset($user) ? $user : null;
		}
		
		public function UpdateLastLoginTime($userID)
		{
			$query = sprintf("
							UPDATE KORISNIK
							SET POSLEDNJE_LOGOVANJE = CURRENT_TIMESTAMP
							WHERE KORISNIK = %s
			",	$userID);
			$userResult = DBConn::Update($query);
		}
	}
?>