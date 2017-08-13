<?php
echo '
   			  <li><a href="http://bradleys.senior-project-james-king.info/contact.php">Contact</a></li>
			  <li><a href="http://bradleys.senior-project-james-king.info/location.php">Location</a></li>
			  <li class="active"><a href="http://bradleys.senior-project-james-king.info/products.php">Products</a></li>
			  <li><a href="http://bradleys.senior-project-james-king.info/about.php">About</a></li>
		  </ul>
		</div>
	  </div>
	  </div>
	</nav>
	<div class="container">    
	  <div class="row">
		<div class="col-sm-12">
		  <div class="panel panel-primary">
			<div class="panel-heading">Product Name</div>
			<div class="panel-body">
				<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"><br>
			</div>
		  </div>
		</div>
		<div class="row">
			<div class="col-sm-7">
				<div class="well well-lg">
					<div class="well">
						<p>Product Description</p>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="well well-lg">
					<div class="well">
						<p>Product ID</p>
						<br>
						<p>Product Price</p>
					</div>
				</div>
			</div>
			
		</div>
		<div class="row">
		<div class="col-sm-12">
		  <div class="panel panel-primary">
			<div class="panel-heading">Set An Appointment Date</div>
			<div class="panel-body">
			<center>
			<form>
				  <div class="form-group">
					<select name="dates_month" id="dates_month">
					  <option value="jan">January</option>
					  <option value="feb">February</option>
					  <option value="mar">March</option>
					  <option value="apr">April</option>
					  <option value="may">May</option>
					  <option value="jun">June</option>
					  <option value="jul">July</option>
					  <option value="aug">August</option>
					  <option value="sep">September</option>
					  <option value="oct">October</option>
					  <option value="nov">November</option>
					  <option value="dec">December</option>
					</select>
				 </div>
				 <div class="form-group">
					<select name="dates_day" id="dates_day">
					  /*loop through days*/
					  <option value="1">1</option>
					</select>
				 </div>
				 <div class="form-group">
					<select name="dates_time" id="dates_time">
					  /*loop through time*/
					  <option value="8A">8:00AM</option>
					</select>
				 </div>
			  <br><br>
			  <a href="#" class="btn btn-primary btn-lg">Make Appointment</a>
			</form>
			</center>
			</div>
		  </div>
		</div>
		</div>
						
	';
?>