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
			<div class="well"><h3>Update Inventory</h3></div>
			<form>
				<div class="update_inventory_list">
				  <div class="form-group">
					<label for="update_type">Update Type:</label>
					<select name="updates" id="update_type">
					  <option value="add_product">Add Product</option>
					  <option value="modify_product">Modify Product</option>
					  <option value="delete_product">Delete Product</option>
					</select>
				  </div>
				 </div>
			  <br><br>
			  <button type="submit" class="btn btn-default">Begin Update</button>
			</form>
		</div>
	</div>
';
?>
?>