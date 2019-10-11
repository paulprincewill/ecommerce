<form method="post" action="app/upload/main" dd_submit="file" dd_bindResult="#success">

	<p>
		<span> <input type="radio" name="type" onchange="changeType()" value="sale" checked> For sale </span>
		<span> <input type="radio" name="type" onchange="changeType()" value="rent"> For rent </span>
	</p>

		<br>

	<p>
		<label>Select product picture</label>
		<input type="file" name="picture" required>
	</p>

    <p>
		<input type="text" name="title" placeholder="Type in product title" required>
	</p>

   <p id="normal_price">
	    <input type="number" name="price" placeholder="Price" required>
   </p>

   <p id="renting_price">
	   	<label> Renting price </label>
		<br>
	    <input type="number" name="renting_price" placeholder="Price" required> per
		<select name="renting_duration">
	 	   	<option>hour</option>
	 	   	<option>day</option>
	 	   	<option>week</option>
		</select>
   </p>

   <p>
       <label> Select category</label>
       <select name="category" required>
		<?php include '../ui/upload/catalogue.php'; ?>
	  </select>
	</p>

	 <p>
		  <textarea name="details" placeholder="Type in product details" required></textarea>
	 </p>

	  <p align="center">
	      <input type="Submit" value="Add product">
	  </p>
   </form>
