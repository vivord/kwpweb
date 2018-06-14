<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<link rel="shortcut icon" href="<?php echo  base_url();?>asset/images/kwp_icon.ico" type="image/x-icon">
		
		<title><?php echo $title;?></title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>asset/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php echo base_url();?>asset/js/script.js"></script>

	</head>


	<body>
		
		<div class="site-content">
			<header class="site-header" data-bg-image="">
				<div class="container">
					<div class="header-bar">
						<a href="<?php echo base_url();?>" class="branding">
							<img src="<?php echo base_url();?>asset/images/kwp.png" alt="" class="logo" style="width:70px; height: 50px;">
							
						</a>

						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<!-- <li class="home menu-item"><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li> -->
								<li class="menu-item"><a href="<?php echo base_url();?>">Home</a></li>
								<li class="menu-item"><a href="<?php echo base_url();?>aboutus">About us</a></li>
								<li class="menu-item"><a href="<?php echo base_url();?>services">Services</a></li>
								<li class="menu-item"><a href="<?php echo base_url();?>products">Our products</a></li>
								<li class="menu-item"><a href="<?php echo base_url();?>contactus">Contact</a></li>
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

			<div class="page-head" data-bg-image="<?php echo base_url();?>asset/images/page-head-1.jpg">
				<div class="container">
					<h2 class="page-title"><?php echo $pagetitle;?></h2>
					
				</div>
			</div>