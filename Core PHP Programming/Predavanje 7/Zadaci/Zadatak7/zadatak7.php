<?php
	

	for ($i = 1;$i <= 7;$i++)
	{
		$lotto = mt_rand(1,39);
		echo "<div>$lotto</div>";
	}
	if(isset($_POST["numbers"]) && $_POST["numbers"] == $lotto)
	{	
		$arrofnum = explode(" ",$_POST["numbers"]);
		echo "Korisnik uneo brojeve:";
		foreach($arrofnum as $x)
		{
			printf("$x &nbsp;");
		}
		
	}
	
?>