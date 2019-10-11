<?php
	include "../../../initialize.php";
	require BACKEND_LIB."db.php";

	$user = $_SESSION['user'];
	$db->sql("SELECT id FROM products WHERE seller_id='$user'");
    $x['total_products'] = $db->getTotal();

    echo json_encode($x);
