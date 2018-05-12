<?php
	
	require_once("util.php");
	
	class DBConn
	{	
		private static $conn;
		
		private static function setConnection()
		{
			self::$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
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
		
		public static function Update($query)
		{
			self::setConnection();
			
			$result = self::$conn->query($query);
			$affectedRows = $result->affected_rows;
			self::closeConnection();
			
			return affectedRows;
		}
	}
?>