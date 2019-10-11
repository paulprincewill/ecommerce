<form id="search" action="app/products/main" dd_submit="yes" dd_bindResult="#products">

	<input type="text" placeholder="Type in a product name to search" name="search">


	<select name="category">
 	   	<option value="">All</option>
 	   	<?php include '../ui/upload/catalogue.php'; ?>
	</select>

	<select name="type">
 	   	<option value="sale">For sale</option>
 		<option value="rent">For rent</option>
	</select>

	<button type="submit"> <i class='pe-7s-search pe-va'></i> Search </button>
</form>
