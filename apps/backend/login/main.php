<?php
	require "../../../initialize.php";
	require '../_lib/db.php';

	// This fields are not secure, consider updating this for a real project
	$phone_number = $_POST['phone_number'];
	$password = $_POST['password'];

	$db->sql("SELECT password, id FROM users WHERE phone_number='$phone_number'");
	if ($db->there_is_data()) { // If a user with this username is in the table
		$data = $db->getData();
		$db_password = $data['password'];

		if ($password === $db_password) {
			$_SESSION['user'] = $data['id'];
			$x['dd_success'] = true;
		} else {
			$x['dd_success'] = false;
			$x['dd_feedback'] = "Password is incorrect";
		}
	} else {
		$x['dd_success'] = false;
		$x['dd_feedback'] = "Phone number does not exist";
	}


    echo json_encode($x);
