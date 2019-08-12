<?php

	require "../../../initialize.php";
    require BACKEND_LIB."db.php";
    
    $db->sql("SELECT * FROM products LIMIT 0,12");
    $alldata = $db->getAllData();
    foreach ($db->eachData as $product) {
    	$id = $product['id'];
    	$thumbnail = "_assets/uploads/thumbnails/product_".$id;
    }
    echo json_encode($alldata);