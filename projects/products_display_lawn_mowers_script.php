<?php
/*Generic Retrieve*/
#require('database_connection.php');
$retrieval_query = 'SELECT Product_Name,Product_Price,Product_ID FROM Inventory WHERE Inventory.Type = "lawn_mowers"';
$number_retrieved = mysqli_affected_rows(mysqli_query($database_connection,$retrieval_query));
$total_pages = 0;
if($number_retrieved>0)
{
	$data_retrieved = mysqli_fetch_array(mysqli_query($database_connection,$retrieval_query));
	number_of_pages($number_retrieved);
	print_pages($total_data)
}

function number_of_pages($total_data)
{
	if($total_data-16>0)
	{
		$total_data-=16;
		$total_pages++;
		number_of_pages($total_data);
	}
}
function print_pages($total_data)
{
	if($total_data>16)
	{
		for($i = 0; $i < 16; $i++)
		{
			if(($i%%4==0)||($i==0))
			{
				echo '<div class="container">    
						<div class="row">';
			}
			$product_name = $data_retrieved[$total_data-$i];
			$product_price = $data_retrieved[$total_data-$i-1];
			$product_id = $data_retrieved[$total_data-$i-2];
			echo '
			<div class="col-sm-3">
			  <div class="panel panel-primary">
				<div class="panel-heading">'.$product_name.'</div>
				<div class="panel-body">
					<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"><br> #insert product ID to call to image folder in url
					<center><a href="http://bradleys.senior-project-james-king.info/products_display_individual" class="btn btn-primary btn-lg">'."$".$product_price.'</a></center> #add product ID to href at end to load information in individual product display
				</div>
			  </div>
			</div>';
			if(($i%%4==0)||($i==0))
			{
				echo '	</div>    
						</div>';
			}
		}
		$total_data-=16;
		#add in number of pages necessary to display all information at the bottom
		print_pages($total_data);
	}
	else
	{
		if($total_data>=12)
		{
			for($i = 0; $i < 12; $i++)
			{
				if(($i%%4==0)||($i==0))
				{
					echo '<div class="container">    
							<div class="row">';
				}
				$product_name = $data_retrieved[$total_data-$i];
				$product_price = $data_retrieved[$total_data-$i-1];
				$product_id = $data_retrieved[$total_data-$i-2];
				echo '
				<div class="col-sm-3">
				  <div class="panel panel-primary">
					<div class="panel-heading">'.$product_name.'</div>
					<div class="panel-body">
						<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"><br> #insert product ID to call to image folder in url
						<center><a href="http://bradleys.senior-project-james-king.info/products_display_individual" class="btn btn-primary btn-lg">'."$".$product_price.'</a></center> #add product ID to href at end to load information in individual product display
					</div>
				  </div>
				</div>';
				if(($i%%4==0)||($i==0))
				{
					echo '	</div>    
							</div>';
				}
				$total_data-=16;
			}
		}
		else if($total_data>=8)
		{
			for($i = 0; $i < 8; $i++)
			{
				if(($i%%4==0)||($i==0))
				{
					echo '<div class="container">    
							<div class="row">';
				}
				$product_name = $data_retrieved[$total_data-$i];
				$product_price = $data_retrieved[$total_data-$i-1];
				$product_id = $data_retrieved[$total_data-$i-2];
				echo '
				<div class="col-sm-3">
				  <div class="panel panel-primary">
					<div class="panel-heading">'.$product_name.'</div>
					<div class="panel-body">
						<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"><br> #insert product ID to call to image folder in url
						<center><a href="http://bradleys.senior-project-james-king.info/products_display_individual" class="btn btn-primary btn-lg">'."$".$product_price.'</a></center> #add product ID to href at end to load information in individual product display
					</div>
				  </div>
				</div>';
				if(($i%%4==0)||($i==0))
				{
					echo '	</div>    
							</div>';
				}
				$total_data-=8;
			}

		}
		else if($total_data>=4)
		{
			for($i = 0; $i < 4; $i++)
			{
				if(($i%%4==0)||($i==0))
				{
					echo '<div class="container">    
							<div class="row">';
				}
				$product_name = $data_retrieved[$total_data-$i];
				$product_price = $data_retrieved[$total_data-$i-1];
				$product_id = $data_retrieved[$total_data-$i-2];
				echo '
				<div class="col-sm-3">
				  <div class="panel panel-primary">
					<div class="panel-heading">'.$product_name.'</div>
					<div class="panel-body">
						<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"><br> #insert product ID to call to image folder in url
						<center><a href="http://bradleys.senior-project-james-king.info/products_display_individual" class="btn btn-primary btn-lg">'."$".$product_price.'</a></center> #add product ID to href at end to load information in individual product display
					</div>
				  </div>
				</div>';
				if(($i%%4==0)||($i==0))
				{
					echo '	</div>    
							</div>';
				}
				$total_data-=4;
			}

		}
		else if($total_data==3)
		{
			echo '<div class="container">    
							<div class="row">';
			for($i = 0; $i < 3; $i++)
			{		
				$product_name = $data_retrieved[$total_data-$i];
				$product_price = $data_retrieved[$total_data-$i-1];
				$product_id = $data_retrieved[$total_data-$i-2];
				echo '
				<div class="col-sm-4">
				  <div class="panel panel-primary">
					<div class="panel-heading">'.$product_name.'</div>
					<div class="panel-body">
						<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"><br> #insert product ID to call to image folder in url
						<center><a href="http://bradleys.senior-project-james-king.info/products_display_individual" class="btn btn-primary btn-lg">'."$".$product_price.'</a></center> #add product ID to href at end to load information in individual product display
					</div>
				  </div>
				</div>';
			}	
			echo '	</div>    
				</div>';
		}
		else if($total_data==2)
		{
			echo '<div class="container">    
							<div class="row">';
			for($i = 0; $i < 2; $i++)
			{		
				$product_name = $data_retrieved[$total_data-$i];
				$product_price = $data_retrieved[$total_data-$i-1];
				$product_id = $data_retrieved[$total_data-$i-2];
				echo '
				<div class="col-sm-6">
				  <div class="panel panel-primary">
					<div class="panel-heading">'.$product_name.'</div>
					<div class="panel-body">
						<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"><br> #insert product ID to call to image folder in url
						<center><a href="http://bradleys.senior-project-james-king.info/products_display_individual" class="btn btn-primary btn-lg">'."$".$product_price.'</a></center> #add product ID to href at end to load information in individual product display
					</div>
				  </div>
				</div>';
			}	
			echo '	</div>    
				</div>';
		}
		else if($total_data==1)
		{
			echo '<div class="container">    
						<div class="row">';	
				$product_name = $data_retrieved[$total_data-$i];
				$product_price = $data_retrieved[$total_data-$i-1];
				$product_id = $data_retrieved[$total_data-$i-2];
				echo '
				<div class="col-sm-4">
				  <div class="panel panel-primary">
					<div class="panel-heading">'.$product_name.'</div>
					<div class="panel-body">
						<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"><br> #insert product ID to call to image folder in url
						<center><a href="http://bradleys.senior-project-james-king.info/products_display_individual" class="btn btn-primary btn-lg">'."$".$product_price.'</a></center> #add product ID to href at end to load information in individual product display
					</div>
				  </div>
				</div>
			</div>    
			</div>';	
		}
	}	
}
?>