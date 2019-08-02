<?php

	require "../../../initialize.php";
    require BACKEND_LIB."db.php";
    


   	$title = $db->getInput('title');
   	$price = $db->getInput('price');
   	$category = $db->getInput('category');
   	$details = $db->getInput('details');
   	$seller_id = 1;

    

    $db->sql("INSERT INTO products (title, price, category, details, seller_id) VALUES('$title','$price','$category','$details','$seller_id')");
    $product_id = $db->conn->insert_id;

   
    if ($db->success) {
        $x['product_link'] = "view?product=".$product_id;
    } else {
        $x['dd_success'] = false;
        $x['dd_feedback'] = $db->feedback;
    }

    echo json_encode($x);