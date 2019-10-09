<?php

	require "../initialize.php";
	$page_link = "products";

	if (isset($_GET['search'])) {
		$page_title = "Displaying search results for '".$_GET['search']."'";
	} else {

		$page_title = "Viewing all products";
	}
	
	$page_description = "products";
	$page_keywords = "products";

	loadHeader("main");
	loadUI("main");
	loadFooter("main");
