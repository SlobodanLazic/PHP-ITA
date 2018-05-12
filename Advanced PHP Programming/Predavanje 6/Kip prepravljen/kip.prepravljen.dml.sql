-- KORISNIK STATUS
INSERT INTO KIP_PREPRAVLJEN.KORISNIK_STATUS (NAZIV, OPIS)
VALUES
	('Aktivan', 'Korisnik je kreiran i aktivan'),
	('Neaktivan', 'Korisnik nije ulogovan duze od 90 dana'),
	('Blokiran', 'Korisnik je blokiran na period od 7 dana');
    
-- KORISNIK
INSERT INTO KIP_PREPRAVLJEN.KORISNIK (USERNAME, PASSWORD, EMAIL, POSLEDNJE_LOGOVANJE, ID_STATUS)
VALUES 
	('admin','admin', 'admin@sajt.com', NULL, 1);
	
INSERT INTO OBLAST (NAZIV, OPIS)
VALUES 
	('Horor', 'Horor priche'),
	('Lifestyle', 'Zivotni stil'),
	('Sci-fi', 'Naucna fantastika'),
	('Komedija', 'Komedija');