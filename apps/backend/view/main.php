<?php

	require "../../../initialize.php";
    require BACKEND_LIB."db.php";


    $product_id = $_GET['product'];

    $db->sql("SELECT * FROM products WHERE id='$product_id'");

    if ($db->there_is_data()) {

        $product = $db->getData();


        $thumbnail = "_assets/uploads/thumbnails/".$product['picture'];
        $product['picture'] = $thumbnail;

		$seller = $product['seller_id'];
		$db->sql("SELECT * FROM users WHERE id='$seller'");
		$seller = $db->getData();
        $product['seller'] = $seller['full_name'];
        $product['seller_number'] = "tel: ". $seller['phone_number'];

		if ($product['type'] == "rent") {
			$product['price'] = $product['renting_price'].' per '. $product['rent_duration'];
		}
        echo json_encode($product);
    }
