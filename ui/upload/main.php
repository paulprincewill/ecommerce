<form method="post" action="app/upload/main" dd_submit="file" dd_bindResult="#success">

	<p>
		<span> <input type="radio" name="type" onchange="changeType()" value="sale" checked> For sale </span>
		<span> <input type="radio" name="type" onchange="changeType()" value="rent"> For rent </span>
	</p>

		<br>

	<p>
		<label>Select product picture</label>
		<input type="file" name="picture">
	</p>

    <p>
		<input type="text" name="title" placeholder="Type in product title">
	</p>

   <p id="normal_price">
	    <input type="number" name="price" placeholder="Price">
   </p>

   <p id="renting_price">
	   	<label> Renting price </label>
		<br>
	    <input type="number" name="renting_price" placeholder="Price"> per
		<select name="renting_duration">
	 	   	<option>hour</option>
	 	   	<option>day</option>
	 	   	<option>week</option>
		</select>
   </p>

   <p>
       <label> Select category</label>
       <select name="category">
	   	<option>Antiques</option>
	   	<option>Art</option>
		<option>Baby</option>
		<option>Books</option>
		<option>Business &amp; Industrial</option>
		<option>Cameras &amp; Photo</option>
		<option>Cell Phones &amp; Accessories</option>
		<option>Clothing, Shoes &amp; Accessories</option>
		<option>Coins &amp; Paper Money</option><option>Collectibles</option>
		<option>Computers/Tablets &amp; Networking</option>
		<option>Consumer Electronics</option>
		<option>Crafts</option>
		<option>Dolls &amp; Bears</option>
		<option>DVDs &amp; Movies</option>
		<option>eBay Motors</option>
		<option>Entertainment Memorabilia
		</option>
		<option>Gift Cards &amp; Coupons
		</option>
		<option>Health &amp; Beauty</option>
		<option>Home &amp; Garden</option>
		<option>Jewelry &amp; Watches</option>
		<option>Music</option>
		<option>Musical Instruments &amp; Gear</option>
		<option>Pet Supplies</option>
		<option>Pottery &amp; Glass</option>
		<option>Real Estate</option>
		<option>Specialty Services</option>
		<option>Sporting Goods</option>
		<option>Sports Mem, Cards &amp; Fan Shop</option>
		<option>Stamps</option>
		<option>Tickets &amp; Experiences</option>
		<option>Toys &amp; Hobbies</option>
		<option>Travel</option>
		<option>Video Games &amp; Consoles
		</option>
	  </select>
	</p>

	 <p>
		  <textarea name="details" placeholder="Type in product details"></textarea>
	 </p>

	  <p align="center">
	      <input type="Submit" value="Add product">
	  </p>
   </form>
