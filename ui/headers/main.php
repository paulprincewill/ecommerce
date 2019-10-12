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
			<a href="index"> <img src="_assets/logo/logo2.png"> </a>
		</div>


		<?php include 'catalogue.php' ?>
		<a href="products"> All products </a>

		<?php
			if ($page_link == 'login' || !isset($_SESSION['user'])) {
				echo '<a href="register"> <button> Register </button> </a>';
			} else if ($page_link == 'register') {
				echo '<a href="login"> <button> Login </button> </a>';
			} else if (isset($_SESSION['user'])) {
				echo '<a href="app/login/logout"> Log out </a>';
			}
		?>

		<a href="upload">
			<button> Add product   <i class="pe-7s-angle-right pe-va"></i> </button>
		</a>

		<!-- <a href="dashboard">
			<button> My products   <i class="pe-7s-angle-right pe-va"></i> </button>
		</a> -->

    </header>

	<h1 id="title"> <?php echo $page_title ?> </h1>
	<main id="page_<?php echo $page_link?>">
