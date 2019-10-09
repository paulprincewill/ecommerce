<?php

	require "../../../initialize.php";
    require BACKEND_LIB."db.php";
	require BACKEND_LIB."image.php";


   	$full_name = $db->getInput('full_name');
   	$phone_number = $db->getInput('phone_number');
   	$matric_number = $db->getInput('matric_number');
   	$password = $db->getInput('password');
   	$confirm_password = $db->getInput('confirm_password');

	if ($confirm_password == $password) {
		$db->sql("INSERT INTO users (full_name, phone_number, matric_number, password) VALUES('$full_name','$phone_number','$matric_number','$password')");

     	$_SESSION['user'] = $db->conn->insert_id;
		$x['dd_success'] = true;

	} else {
		$x['dd_success'] = false;
		$x['dd_feedback'] = "Your passwords do not match";
	}

    echo json_encode($x);
