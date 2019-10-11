<?php

	require "../../../initialize.php";
	if (session_destroy()) {
		header("location: ../../login");
	}

?>
