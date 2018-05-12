<?php
	include_once "modules/book/genreBL.class.php";
	include_once "classes/bookBM.class.php";
	include_once "db/classes/BookDM.class.php";
	include_once "db/classes/BookDM.class.php";
	
	class BookBL
	{
		public function InsertNewBook()
		{
			$title = trim($_POST["title"]);
			$genreID = trim($_POST["title"]);
			$cover = $_FILES["title"];
			
			if ($title != "" && $genreID != "" && $_FILES["cover"]["error"] == 0)
			{
				$book = new BookBM();
				$book->SetNewBook($title, $genreID, $_FILES["cover"]["name"]);
				$bookDM = $this->MapBookBM2DM($book);
				
				$bookDAL = new BookDAL();
				$id = $bookDAL->Insert($bookDM);
				
				if ($id == -1)
				{
					printf("Doslo je do greske");
				}
				else
				{
					$imageFolderPath = sprintf("images/books/%d", $id);
					mkdir($imageFolderPath);
					
					$filePath = sprintf("%s/%s", $imageFolderPath, $_FILES["cover"]["name"]);
					move_uploaded_file($_FILES["cover"]["tmp_name"], $filePath);
				}
			}
		}
		
		public function GetBooks()
		{
			$bookDAL = new BookDAL();
			$booksDM = $bookDAL->GetBooks();
			
			$books = $this->MapBookDM2BM($booksDM);
			
			return $books;
		}
		
		private function MapBookDM2BM($booksDM)
		{
			if (ISSET($booksDM) && $booksDM != null && count($booksDM) > 0)
			{	
				$genresBL = new GenreBL();
				$genres = $genresBL->GetGenres();
				
				foreach($genres as $genre)
				{
					$genresToLoad[$genre->GetID()] = $genre->GetName();
				}
				
				foreach($booksDM as $bookDM)
				{
					$book = new BookBM();
					$book->LoadBookFromDB(
											$bookDM->GetID_KNJIGA(),
											$bookDM->GetNASLOV(),
											$bookDM->GetID_OBLAST(),
											null,
											$bookDM->GetNASLOVNICA()
										);
					$books[] = $book;
				}
			}
			
			return ISSET($books) ? $books : null;
		}
		
		private function MapBookBM2DM($book)
		{
			$bookDM = new BookDM();
			$bookDM->LoadBook(	null,
								$book->GetTitle(),
								$book->GetGenreID(),
								$book->GetCover()
							);
			return $bookDM;
		}
	}