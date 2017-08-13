<?php

#require('database_connection.php');

/*Adding product to product inventory*/


#preliminary set up -- will be more secure later

if(isset($_REQUEST['inventory_type']))#&&isset($_REQUEST['product_name'])&&isset($_REQUEST['product_number'])&&isset($_REQUEST['product_description'])&&isset($_REQUEST['product_caption']))
{
	$i_type = $_REQUEST['inventory_type'];
	$p_name = $_REQUEST['product_name'];
	$p_number = $_REQUEST['product_number'];
	$p_description = $_REQUEST['product_description'];
	$p_price = $_REQUEST['product_price'];
	$p_caption = $_REQUEST['product_caption'];
	$p_picture_path = '/uploads/'.$p_number;
	
	$v_t_inputs = array($p_name,$p_number,$p_description,$p_price,$p_caption);
	
	
	#require('location_coordinates.php');
	
	#call validate_text_input($v_t_inputs) and 
	
	if(isset($_FILE['product_picture']))
	{
		#$v_p_input = $_FILE['product_picture']['type']; #check if valid later
		if(move_uploaded_file($_FILES['upload']['product_picture'],"../uploads/{$p_number}"))
		{
			echo "Success";
		}
		else
		{
			echo "1";
		}
		#validate_picture_input($v_p_input)		
		$p_picture = $_REQUEST['product_picture'];
		
		$insert_product_query = 'INSERT INTO Products VALUES '.$p_number.','.$p_name.','.$p_description.','.$p_price.','.$p_caption.','.$p_picture_path.','.$i_type.'\''; #check ending syntax
		if(mysqli_query($database_connection,$insert_product_query))
		{
			#header{successful product update on update inventory page}
		}
		else
		{
			#header{unsuccessful product update on update inventory page}
			echo "\n 2";
		}
	}
}
?>