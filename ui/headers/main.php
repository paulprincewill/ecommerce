<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $page_title ?> | New project </title>


		<link rel="stylesheet" type="text/css" href="_assets/fonts/proxima/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="_assets/icons/pe-icon/styles/pe-icon.css">
		<link rel="stylesheet" type="text/css" href="_assets/icons/pe-icon/styles/helper.css">
		<link rel="stylesheet" type="text/css" href="ui/_css/_general.dd.css">
		<link rel="stylesheet" type="text/css" href="ui/<?php echo $page_link ?>/_styles.dd.css">

</head>
<body>



	<dd_loader>
		<div dd_ajaxload></div>
	</dd_loader>

	<header id="main_header">

		<div id="logo">
			<img src="_assets/logo/logo2.png">
		</div>

		<div id="search_area">
			<form id="search" action="products" method="get">
				<input type="text" placeholder="Type in a product name to search" name="search">
				<button type="submit"> <i class='pe-7s-search pe-2x'></i> </button>
			</form>
		</div>

		<a href="dashboard">
			<button> Account   <i class="pe-7s-angle-right pe-va"></i> </button>
		</a>

    </header>

	<h1 id="title"> <?php echo $page_title ?> </h1>
	<main id="page_<?php echo $page_link?>">
