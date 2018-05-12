<?php
	class GenreBM
	{
		private $ID;
		private $name;
		private $description;
		
		public function SetID($ID)
		{
			$this->ID = $ID;
		}
		
		public function SetName($name)
		{
			$this->name = $name;
		}
		
		public function SetDescription($description)
		{
			$this->description = $description;
		}
		
		public function GetID()
		{
			return $this->ID;
		}
		
		public function GetName()
		{
			return $this->name;
		}
		
		public function GetDescription()
		{
			return $this->description;
		}
		
		public function SetGenre($ID, $name, $description)
		{
			$this->ID = $ID; 
			$this->name = $name;
			$this->description = $description;
		}
	}
?>