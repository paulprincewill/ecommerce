<?php

	if (!isset($_SESSION['user'])) {
		header('location: login');
	} else {
		$user = $_SESSION['user'];
	}
