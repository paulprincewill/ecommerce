<?php

	require "../initialize.php";
	include APP.'login/auth.php';

	$page_link = "dashboard";
	$page_title = "Welcome back";
	$page_description = "dashboard";
	$page_keywords = "dashboard";

	loadHeader("main");
	loadUI("main");
	loadFooter("main");
