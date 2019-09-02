<?php

	require "../../../initialize.php";
    require BACKEND_LIB."db.php";
    

    $product_id = $_GET['product'];

    $db->sql("SELECT id,title,category,details, price,picture FROM products WHERE id='$product_id'");

    if ($db->there_is_data()) {
        
        $product = $db->getData();

   
        $thumbnail = "_assets/uploads/thumbnails/".$product['picture'];
        $product['picture'] = $thumbnail;
        $product['seller'] = "Paul Princewill";
        $product['seller_number'] = "tel: +2347061988188";

        echo json_encode($product);
    } 
    