<?php
	
	class GenreDM
	{
		private $ID_OBLAST;
		private $NAZIV;
		private $OPIS;
		
		public function SetID_OBLAST($ID_OBLAST)
		{
			$this->ID_OBLAST = $ID_OBLAST;
		}
		
		public function SetNAZIV($NAZIV)
		{
			$this->NAZIV = $NAZIV;
		}
		
		public function SetOPIS($OPIS)
		{
			$this->OPIS = $OPIS;
		}
		
		public function GetID_OBLAST()
		{
			return $this->ID_OBLAST;
		}
		
		public function GetNAZIV()
		{
			return $this->NAZIV;
		}
		
		public function GetOPIS()
		{
			return $this->OPIS;
		}
		
		public function SetGenre($ID_OBLAST, $NAZIV, $OPIS)
		{
			$this->ID_OBLAST = $ID_OBLAST;
			$this->NAZIV = $NAZIV;
			$this->OPIS = $OPIS;
		}
	}
?>