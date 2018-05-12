<?php
	
	class DBConn
	{	
		private static $conn;
		
		private static function setConnection()
		{
			self::$conn = new mysqli("localhost", "root", "", "kip_prepravljen");
		}
		
		private static function closeConnection()
		{
			self::$conn->close();
		}
		
		public static function Select($query)
		{
			self::setConnection();
			
			$result = self::$conn->query($query);
			
			while ($row = $result->fetch_assoc())
			{
				$resultArray[] = $row;
			}
			
			self::closeConnection();
			
			return isset($resultArray) ? $resultArray : null;
		}
	}
?>