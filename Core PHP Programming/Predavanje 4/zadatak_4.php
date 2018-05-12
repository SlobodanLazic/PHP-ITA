<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Zadatak 4</title>
	</head>
	
	<body>
		<?php 
			$array[] = 15;
			$array[] = 4;
			$array[] = 13;
			$array[] = 20;
			$array[] = 23;
			
			for($i = 0;$i < count($array);$i++)
			{
				echo $array[$i];
			}
		
			
			/* $num = array(3,7,345,2,9,17,25,11,500,1);
			$max = $num[0];
			$min = $num[0];
			$indexMax = 0;
			$indexMin = 0;

			for($i = 0; $i < count($num); $i++){

			if($max < $num[$i]){

			$max = $num[$i];
			$indexMax = $i;

			} else if($min > $num[$i]){

			$min = $num[$i];
			$indexMin = $i;
			}
			}

			echo "Najveci broj je: " . $max . " (Pozicija: " . $indexMax . ")";

			echo "<hr>";

			echo "Najmanji broj je: " . $min . " (Pozicija: " . $indexMin . ")"; */
			
			/*
			$niz=array(1, 2, 56, 103, -15, 91, 11, -9, 1);

			$max=$niz[0];
			$indeks=0;
			for($i=0;$i<count($niz);$i++)
			if($niz[$i]>=$max)
			{
			$max=$niz[$i];
			$indeks=$i;
			}

			echo "Najveci elemenat niza je: ".$max." i njegov indeks je ".$indeks."<br>";
			$min=$niz[0];
			for($i=0;$i<count($niz);$i++)
			if($niz[$i]<$min)$min=$niz[$i];

			echo "Najmanji elemenat niza je: ".$min."<br>";

			echo "<hr>";
			$imax=0;
			for($i=0;$i<count($niz);$i++)
			if($niz[$i]>$niz[$imax])$imax=$i;
			echo "Najveci elemenat niza je: ".$niz[$imax]." i njegov indeks je ".$imax."<br>"; */
			
		?>
	</body>
</html>