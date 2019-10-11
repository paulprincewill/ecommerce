<form action="products" method="get" id="catalogue">
	<select name="category" onchange="dd('#catalogue').select().submit()">
		<option value="">Catalogue</option>
		<?php include '../ui/upload/catalogue.php'; ?>
	</select>
</form>
