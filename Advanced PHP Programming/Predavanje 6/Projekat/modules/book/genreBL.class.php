<?php
	include_once ("db/modules/BookDAL.class.php");
	include_once "db/classes/GenreDM.class.php";
	include_once "classes/genreBM.class.php";
	
	class GenreBl
	{
		public function GetGenres()
		{
			$genreDAL = new BookDAL();
			$genresDM = $genreDAL->GetGenres();
			
			$genres = $this->MapGenresDM2BM($genresDM);
			
			return $genres;
		}
		
		private function MapGenresDM2BM($genresDM)
		{
			if ($genresDM != null && is_array($genresDM) && count($genresDM) > 0)
			{
				foreach($genresDM as $genreDM)
				{
					$genreBM = new GenreBM();
					$genreBM->SetGenre(
										$genreDM->GetID_OBLAST(),
										$genreDM->GetNAZIV(),
										$genreDM->GetOPIS()
									);
									
						$genres[] = $genreBM;
				}
			}
			
			return ISSET($genres) ? $genres : null;
		}
	}
?>