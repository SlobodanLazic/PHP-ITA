<?php
	
	include_once("db/classes/GenreDM.class.php");
	include_once("db/db.class.php");
	
	class BookDAL
	{
		public function GetGenres()
		{
			$query = "	SELECT 
							o.ID_OBLAST, 
							o.NAZIV, 
							o.OPIS
						FROM
							KIP.OBLAST o";
							
			$genresResult = DBConn::Select($query);
			if ($genresResult != null && is_array($genresResult) && count($genresResult) > 0)
			{
				$genre = new GenreDM();
				foreach($genresResult as $genreResult)
				{
					$genre = new GenreDM();
					$genre->SetGenre($genreResult["ID_OBLAST"],
									$genreResult["NAZIV"],	
									$genreResult["OPIS"]
						);
					$genres[] = $genre;
				}
								
			}
			
			return isset($genres) ? $genres : null;
		}
	}
	
?>