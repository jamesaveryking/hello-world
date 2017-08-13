<?php
	/*Preliminary Validation Security*/
	$potential_errors = array();
	
	$sql_injection_potential = array('INSERT','DELETE','UPDATE','SELECT','WHERE','FROM','INTO');
	$invalid_special_characters = array('@','^','*','\\','[',']','{','}','_',);
	$valid_picture_type = array('image/pjpeg','image/jpeg','image/JPG','image/X-PNG','image/PNG','image/png','image/x-png');
	
	function validate_text_input($text_array)
	{
		for($a = 0; $a < count($text_array); $a++)
		{
			for($b = 0; $b < count($sql_injection_potential; $b++)
			{
				if(strtoupper($text_array[a]) == $sql_injection_potential[b])
				{
					#modify condition to contains
					$potential_errors[] = "Please do not try to SQL inject this website";
				}
			}
		}
		
		for($a = 0; $a < count($text_array); $a++)
		{
			for($b = 0; $b < count($invalid_special_characters; $b++)
			{
				if($text_array[a] == $invalid_special_characters[b])
				{
					$potential_errors[] = "Please enter valid special characters";
				}
			}
		}
	}
	
	function validate_picture_input($picture_type)
	{
		//loop through valid types to update array
	}
?>