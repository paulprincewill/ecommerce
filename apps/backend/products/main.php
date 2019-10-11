<?php

	require "../../../initialize.php";
    require BACKEND_LIB."db.php";

	if (isset($_POST['search'])) {

		$search = $_POST['search'];
		$category = $_POST['category'];
		$type = $_POST['type'];

		$sql = "SELECT * FROM products WHERE title LIKE '%$search%' AND category LIKE '%$category%' AND type LIKE '%$type%' LIMIT 0,12";
	} else 	if (isset($_GET['category'])) {
		$search = $_GET['category'];
		$sql = "SELECT * FROM products WHERE category LIKE '%$search%' LIMIT 0,12";
	}
	else {
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
