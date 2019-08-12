<?php

	require "../../../initialize.php";
    require BACKEND_LIB."db.php";
	require BACKEND_LIB."image.php";
    

   	$title = $db->getInput('title');
   	$price = $db->getInput('price');
   	$category = $db->getInput('category');
   	$details = $db->getInput('details');
   	$seller_id = 1;

    // We don't know the product id yet, 
    // so we have to generate one
    // by getting the last product id and adding 1
   	$db->sql("SELECT id FROM products ORDER BY id DESC");
    $product_id = $db->getData();
    $product_id = $product_id['id']+1;

	$img = new img("picture","product_".$product_id);
	$img->checkImage();

	if ($img->error ==""){

		$img->preparePath("../../../_assets/uploads/thumbnails");
		$img->crop(400,400); // Crop image

		$img->preparePath("../../../_assets/uploads");
		$img->upload(); // Upload full image

		$picture = "product_".$product_id.'.'.$img->file_extension;

    	
		 $db->sql("INSERT INTO products (title, price, category, details, seller_id, picture) VALUES('$title','$price','$category','$details','$seller_id','$picture')");
     	$product_id = $db->conn->insert_id;

	   
	     if ($db->success) {

	     	$x['product_link'] = "view?product=".$product_id;

	     } else {
	         $x['dd_success'] = false;
	         $x['dd_feedback'] = $db->feedback;
	     }
		
	} else {
		
        $x['dd_success'] = false;
        $x['dd_feedback'] = $img->error;
	}

    echo json_encode($x);