<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div style="width: 600px;">
			<?php
				require_once "modules/book/bookBL.class.php";
				$bookBL = new BookBL();
				$books = $bookBL->GetBooks();
				
				foreach($books as $book)
				{
					$imagePath = sprintf("images/books/%d/%s", $book->GetID(),$book->GetCover());	
					printf ("
					<div style='float: left; width: 150px; margin: 5px; border: 1px solid grey;'>
						<div>
							<img src='%s' width='140px;'/>
						</div>
						<div>
							<div style='text-align:right; font-weight: bold;'>
								%s
							</div>
							<div style='text-align:right; font-weight: normal; font-size: small'>
								%s
							</div>
						</div>
					</div>								
					",
						$imagePath, $book->GetTitle(), $book->GetGenreName());
				}
			?>
			
			<div style="clear:both">
			
			</div>
		</div>
	</body>
</html>