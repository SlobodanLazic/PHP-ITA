<?php
	class BookBM
	{
		private $id;
		private $title;
		private $genreID;
		private $genreName;
		private $cover;
		
		public function SetNewBook($title, $genreID, $cover)
		{
			$this->title = $title;
			$this->genreID = $genreID;
			$this->cover = $cover;
		}
		
		public function GetID()
		{
			return $this->id;
		}	
		public function GetTitle()
		{
			return $this->title;
		}	
		public function GetGenreID()
		{
			return $this->genreID;
		}
		public function GetGenreName()
		{
			return $this->genreName;
		}
		public function GetCover()
		{
			return $this->cover;
		}
		
		public function LoadBookFromDB($id, $title, $genreID, $genreName, $cover)
		{
			$this->id = $id;
			$this->title = $title;
			$this->genreID = $genreID;
			$this->genreName = $genreName;
			$this->cover = $cover;
		}
	}
?>