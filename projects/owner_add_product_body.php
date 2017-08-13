<?php
echo '
			  <li><a href="http://bradleys.senior-project-james-king.info/contact.php">Contact</a></li>
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
			<div class="well"><h3>Add Product to Inventory</h3></div>
			<form action = "owner_add_product_script.php">
			  <div class="form-group">
				<label for="inventory_type">Inventory Type:</label>
				<select name="inventory" id="inventory_type">
				  <option value="tractor">Tractor</option>
				  <option value="lawn_mower">Lawn Mower</option>
				  <option value="small_engine">Small Engine</option>
				  <option value="other">Other</option>
				</select>
			  </div>
			  <div class="form-group">
				<label for="product_name">Product Name:</label>
				<input type="text" class="form-control" id="product_name">
			  </div>
			  <br><br>			  
			  <div class="form-group">
				<label for="product_number">Product Identification Number:</label>
				<input type="text" class="form-control" id="product_number">
			  </div>
			  <br><br>			  
			  <div class="form-group">
				<label for="product_description">Product Description</label>
				<textarea class="form-control" rows="5" id="product_description"></textarea>
			  </div>
			  <br><br>			  
			  <div class="form-group">
				<label for="product_price">Product Price:</label>
				<input type="text" class="form-control" id="product_price">
			  </div>
			  <br><br>
			  <div class="upload">
				<label for="product_picture">Picture Upload (Please Use .jpg or .png File Extensions):</label>
				<input type="file" class="form-control" id="product_picture">
			  </div>
			  <br><br>
			  <div class="form-group">
				<label for="product_caption">Product Caption:</label>
				<input type="text" class="form-control" id="product_caption">
			  </div>
			  <br><br>
			  <button type="submit" class="btn btn-default">Add Product</button>
			</form>
		</div>
	</div>
';
?>
?>