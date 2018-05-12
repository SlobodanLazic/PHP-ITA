<?php
	
	class BookDM
	{
		private $ID_KNJIGA;
		private $NASLOV;
		private $ID_OBLAST;
		private $NASLOVNICA;
		
		public function LoadBook($ID_KNJIGA, $NASLOV, $ID_OBLAST, $NASLOVNICA)
		{
			$this->ID_KNJIGA=$ID_KNJIGA;
			$this->NASLOV=$NASLOV;
			$this->ID_OBLAST=$ID_OBLAST;
			$this->NASLOVNICA=$NASLOVNICA;
		}
		
		public function GetID_KNJIGA()
		{
			return $this->ID_KNJIGA;
		}
		
		public function GetID_OBLAST()
		{
			return $this->ID_OBLAST;
		}
		
		public function GetNASLOV()
		{
			return $this->NASLOV;
		}
		
		public function GetNASLOVNICA()
		{
			return $this->NASLOVNICA;
		}
	}
?>