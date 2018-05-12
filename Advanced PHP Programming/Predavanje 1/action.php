<?php 
	$radio1 = 'unchecked';
	$radio2 = 'unchecked';
	
	if(isset($_POST["submit"]))
	{
		$selected_radio = $_POST['radio'];
		if($selected_radio == 'yes')
		{
			$radio1 = 'checked';
		}
		else if ($selected_radio == 'no')
		{
			printf $selected_radio;
		}
	}
?>	
