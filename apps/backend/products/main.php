<?php

	require "../../../initialize.php";
    require BACKEND_LIB."db.php";
    
    $db->sql("SELECT id,title,price,picture FROM products LIMIT 0,12");
    $alldata = [];
    $db->getAllData();

    foreach ($db->eachData as $product) {
    	$thumbnail = "_assets/uploads/thumbnails/".$product['picture'];
    	$product['picture'] = $thumbnail;
    	$product['link'] = "view?product=".$product['id'];
    	array_push($alldata, $product);
    }

    echo json_encode($alldata);