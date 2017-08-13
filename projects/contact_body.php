<?php
echo '
			  <li class="active"><a href="http://bradleys.senior-project-james-king.info/contact.php">Contact</a></li>
			  <li><a href="http://bradleys.senior-project-james-king.info/location.php">Location</a></li>
			  <li><a href="http://bradleys.senior-project-james-king.info/products.php">Products</a></li>
			  <li><a href="http://bradleys.senior-project-james-king.info/about.php">About</a></li>
		  </ul>
		</div>
	  </div>
	</div>
	</nav>
	<div class="container">
		<div class="well well-lg">
			<div class="well"><h3>Email Us Your Repair Details Before You Visit</h3></div>
			<form>
			  <div class="form-group">
				<label for="customer_name">Your Name:</label>
				<input type="text" class="form-control" id="customer_name">
			  </div>
			  <div class="form-group">
				<label for="phone_number">Phone Number:</label>
				<input type="text" class="form-control" id="phone_number">
			  </div>
			  <div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
				<label for="engine_manufacturer">Engine Manufacturer and Model Number:</label>
				<input type="text" class="form-control" id="engine_manufacturer">
			  </div>
			  <div class="form-group">
				  <label for="problem_description">Problem Description: (Any and all observations such as sounds, color of smoke, etc.)</label>
				  <textarea class="form-control" rows="5" id="problem_description"></textarea>
			  </div>
			  <div class="upload">
				<label for="upload_picture">Picture Upload (Please Use .jpg or .png File Extensions):</label>
				<input type="file" id="upload_picture">
			  </div>
			  <br><br>
			  <div class="g-recaptcha" data-sitekey="6LeZDigUAAAAAPDrcpFboNW84ck-LNGvXSS6Bfuu"></div>
			  <br><br>
			  <button type="submit" class="btn btn-default">Send Email</button>
			</form>
		</div>
	</div>
';
?>