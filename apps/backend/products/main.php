<?php

	require "../../../initialize.php";
    require BACKEND_LIB."db.php";

	if (isset($_GET['search'])) {
		$search = $_GET['search'];
		$sql = "SELECT * FROM products WHERE title LIKE '%$search%' LIMIT 0,12";
	} else {
		$sql = "SELECT * FROM products LIMIT 0,12";
	}

    $db->sql($sql);
    $alldata = [];
    $db->getAllData();

    foreach ($db->eachData as $product) {
    	$thumbnail = "_assets/uploads/thumbnails/".$product['picture'];
    	$product['picture'] = $thumbnail;
    	$product['link'] = "view?product=".$product['id'];


		if ($product['type'] == "rent") {
			$product['price'] = $product['renting_price'].' per '. $product['rent_duration'];
		}
		
    	array_push($alldata, $product);
    }

    echo json_encode($alldata);
