<?php

	require "../initialize.php";
	$page_link = "products";

	if (isset($_GET['category'])) {
		$page_title = "Displaying search results for '".$_GET['category']."'";
	} else {

		$page_title = "Viewing all products";
	}

	$page_description = "products";
	$page_keywords = "products";

	loadHeader("main");
	loadUI("search");

	loadUI("main");
	loadFooter("main");
