<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>fopen()</title>
	</head>
	<body>
		<?php 
			/* 
			r
			Otvara datoteku samo sa mogućnošću čitanja.
			Pokazivač se postavlja na početak datoteke.
			
			r+
			Otvara datoteku sa pravima i za čitanje i sa pisanje. 
			Pokazivač se postavlja na početak datoteke.
			
			w
			Otvara datoteku sa pravima pisanja.Pokazivač
			se postavlja na početak datoteke i vrši se truncate na dužinu 0.
			Ukoliko datoteka ne postoji, pokušava se njeno kreiranje.
			
			w+
			Otvara datoteku sa pravima pisanja i čitanja.Pokazivač
			se postavlja na početak datoteke i vrši se truncate na dužinu 0.
			Ukoliko datoteka ne postoji, pokušava se njeno kreiranje.
			
			a 
			Otvara datoteku samo sa mogućnošću čitanja.
			Pokazivač se postavlja na kraj datoteke.
			Ukoliko datoteka ne postoji, pokušava se njeno kreiranje.
			
			a *
			Otvara datoteku  sa mogućnošću čitanja i pisanja.
			Pokazivač se postavlja na kraj datoteke.
			Ukoliko datoteka ne postoji, pokušava se njeno kreiranje.
			
			x
			Kreira i otvara datoteku sa pravima pisanja.
			Pokazivač se postavlja na početak datoteke.Ukoliko datoteka sa tim nazivom
			već postoji fopen() neće moći da se izvši i vratiće false. Ukoliko datoteka ne postoji,
			pokušava se njeno kreiranje.
			
			x+
			Kreira i otvara datoteku sa pravima čitanja i pisanja.
			Pokazivač se postavlja na početak datoteke.Ukoliko datoteka sa tim nazivom
			već postoji fopen() neće moći da se izvši i vratiće false. Ukoliko datoteka ne postoji,
			pokušava se njeno kreiranje.
			
			c 
			Otvara datoteku za pisanje. Ukoliko datoteka ne postoji vrši se njeno kreiranje.
			Ukoliko postoji, njen sadržaj se ni ne briše, niti izvršenje vraća grešku.
			Pokazivač se postavlja na početak datoteke.
			
			c+
			Otvara datoteku za čitanje i pisanje.Ukoliko datoteka ne postoji vrši se njeno kreiranje.
			Ukoliko postoji, njen sadržaj se ni ne briše, niti izvršenje vraća grešku.
			Pokazivač se postavlja na početak datoteke.
			
			*/
			
			$handle = fopen("somefile.txt", "r");
			fclose($handle);
		?>	
	</body>
</html>