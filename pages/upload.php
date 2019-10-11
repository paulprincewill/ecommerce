<?php

	require "../initialize.php";
	include APP.'login/auth.php';

	$page_link = "upload";
	$page_title = "Add new product";
	$page_description = "upload";
	$page_keywords = "upload";

	loadHeader("main");
	loadUI("main");
	loadUI("success");
	loadFooter("main");
