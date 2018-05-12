<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Definisanje jednostavnih klasa</title>
	</head>
	
	<body>
		<?php 
		class Pljackasbanke
		{
			public void UkradiOd(BankovniRacun podNapadom)
			{
				podNapadom.stanje -= 999999;
			}
		}
		
		class BankovniRacun
		{
			public void Dodaj(double vrednost)
			{
				stanje += vrednost;
			}
			private decimal stanje;
		}
		
		class BankovniRacun
		{
			public void Dodaj(double vrednost)
			{
				stanje += vrednost;
			}
			private decimal stanje;
		}
		?>
	</body>
</html>