<?php
	session_start();
	include('db_connect/db.php');
	unset($_SESSION['SESS_FARMER_ID']);
	unset($_SESSION['SESS_LABOR_ID']);
	unset($_SESSION['SESS_AGENT_ID']);
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_CUST_ID']);
?>	
<!DOCTYPE html>
<html lang="zxx">

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>farm friend</title>
		
		<meta name="keywords" content="Organic, Fresh Food, Farm Store">
		<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
		<meta name="author" content="tivatheme">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reponsive.css">
	</head>
	
	<body class="home home-3">
		<div id="all">
			<!-- Header -->
			<header id="header">
				<div class="container">
					<div class="header-top">
						<div class="row align-items-center">
							<!-- Header Left -->
							<div class="col-lg-5 col-md-5 col-sm-12">
								<!-- Main Menu -->
								<div id="main-menu">
									<ul class="menu">																				
										<li><a href="index.php">Home</a></li>	
                                        <li><a href="product.php">Product</a></li>	
                                        <li><a href="labours.php">Labours</a></li>
                                        <li><a href="vehicles.php">Vehicles</a></li>	
									</ul>
								</div>
							</div>
							
							<!-- Header Center -->
							<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
								<!-- Logo -->
								<div class="logo">
									<a href="index.php"  style="border-radius:1000px;">
										<img class="img-responsive" src="img/logo.png" alt="Logo">
									</a>
								</div>
									<div class="clearfix">
                                    </div>
								<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
							</div>
							
							
							<!-- Header Right -->
							<div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
								<!-- Search -->							
								<div class="form-search">
									<form action="#" method="get">
										<input type="text" class="form-input" placeholder="Search">
										<button type="submit" class="fa fa-search"></button>
									</form>
								</div>
								
								<!-- Cart -->
								<div class="block-cart dropdown">
									<div class="cart-title">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									</div>
								</div>
								
								
								<!-- My Account -->
								<div class="my-account dropdown toggle-icon">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="zmdi zmdi-menu"></i>
									</div>
									<div class="dropdown-menu">																				
										<div class="item">
											<a href="login.php" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
										</div>
										<div class="item">
											<a href="register.php" title="Register Account"><i class="fa fa-user"></i>Register</a>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</header>
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">				
				<!-- Slideshow -->		
				<div class="section slideshow">
					<div class="tiva-slideshow-wrapper">
						<div id="tiva-slideshow" class="nivoSlider">
							<a href="#">
								<img class="img-responsive" src="img/slideshow/home3-slideshow-1.jpg" alt="Slideshow Image">
							</a>
							<a href="#">
								<img class="img-responsive" src="img/slideshow/home3-slideshow-2.jpg" alt="Slideshow Image">
							</a>
							<a href="#">
								<img class="img-responsive" src="img/slideshow/home3-slideshow-3.jpg" alt="Slideshow Image">
							</a>
						</div>
					</div>
				</div>
				
				
				<!-- Product - New Arrivals -->
				<div class="section products-block product-tab tab-2">
					<div class="block-title">
						<h2 class="title">New <span>Arrivals</span></h2>
						<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing elit eiusmod tempor</div>
					</div>
					
					<div class="block-content">
						<div class="container">
							<!-- Tab Navigation -->						
							<!-- Tab Content -->
							<div class="tab-content">
								<!-- All Products -->
								<div role="tabpanel" class="tab-pane fade in active">
									<div class="products owl-theme owl-carousel">
										<div class="product-group">
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="img/product/4.jpg" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
														
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
														
												<div class="product-price">
													<span class="sale-price">$80.00</span>
													<span class="base-price">$90.00</span>
												</div>
																
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
											
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="img/product/14.jpg" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
														
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
														
												<div class="product-price">
													<span class="sale-price">$80.00</span>
													<span class="base-price">$90.00</span>
												</div>
																
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
										
										<div class="product-group">
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="img/product/8.jpg" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
														
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
														
												<div class="product-price">
													<span class="sale-price">$120.00</span>
												</div>
																
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>	
											
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="img/product/9.jpg" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
														
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star on"></div>
												</div>
														
												<div class="product-price">
													<span class="sale-price">$80.00</span>
													<span class="base-price">$90.00</span>
												</div>
																
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
										
										<div class="product-group">
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="img/product/10.jpg" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
														
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
														
												<div class="product-price">
													<span class="sale-price">$96.00</span>
												</div>
																
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
											
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="img/product/33.jpg" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
														
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
														
												<div class="product-price">
													<span class="sale-price">$80.00</span>
													<span class="base-price">$90.00</span>
												</div>
																
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
										
										<div class="product-group">
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="img/product/20.jpg" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
														
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
														
												<div class="product-price">
													<span class="sale-price">$96.00</span>
												</div>
																
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
											
											<div class="product-item">
												<div class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="img/product/23.jpg" alt="Product Image">
													</a>
												</div>
												
												<div class="product-title">
													<a href="product-detail-left-sidebar.html">
														Organic Strawberry Fruits
													</a>
												</div>
														
												<div class="product-rating">
													<div class="star on"></div>
													<div class="star on"></div>
													<div class="star on "></div>
													<div class="star on"></div>
													<div class="star"></div>
												</div>
														
												<div class="product-price">
													<span class="sale-price">$80.00</span>
													<span class="base-price">$90.00</span>
												</div>
																
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>												
													</a>
													
													<a class="quickview" href="#">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- Intro -->
				<div class="section intro">
					<div class="block-content">
						<div class="container">
							<div class="intro-content">
								<div class="row">
									<div class="title">Why Choose Us</div>
									<div class="col-lg-6 col-md-6 col-xs-6 item up-left">
										<h4>100% Natural</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									<div class="col-lg-6 col-md-6 col-xs-6 item up-right">
										<h4>Always Fresh</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									<div class="col-lg-6 col-md-6 col-xs-6 item down-left">
										<h4>Premium Quality</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									<div class="col-lg-6 col-md-6 col-xs-6 item down-right">
										<h4>Super Healthy</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- Product -->
				<div class="two-column">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">Featured <span>Products</span></h2>
									<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/4.jpg" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/8.jpg" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<span class="sale-price">$120.00</span>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/14.jpg" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/6.jpg" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<span class="sale-price">$120.00</span>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="section products-block category-double no-border">
								<div class="block-title">
									<h2 class="title">Best <span>Sellers</span></h2>
									<div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
								</div>
								
								<div class="block-content">
									<div class="products owl-theme owl-carousel">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/16.jpg" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/30.jpg" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<span class="sale-price">$120.00</span>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/17.jpg" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
										
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/20.jpg" alt="Product Image">
												</a>
											</div>
											
											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>
											
											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>
											
											<div class="product-price">
												<span class="sale-price">$120.00</span>
											</div>
											
											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- Banners -->
				<div class="section banners">
					<div class="row margin-0">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-0">
							<div class="banner-item">
								<div class="text">
									<h3>Tomato and Pepper</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
									<a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
								</div>
								<div class="image-mask"></div>
								<img class="img-responsive" src="img/banner/home3-banner-1.jpg" alt="Banner">
							</div>
						</div>
						
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 padding-0">
							<div class="row margin-0">
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
									<div class="banner-item">
										<div class="text">
											<h3>Tomato and Pepper</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
											<a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
										</div>
										<div class="image-mask"></div>
										<img class="img-responsive" src="img/banner/home3-banner-2.jpg" alt="Banner">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
									<div class="banner-item">
										<div class="text">
											<h3>Tomato and Pepper</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
											<a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
										</div>
										<div class="image-mask"></div>
										<img class="img-responsive" src="img/banner/home3-banner-3.jpg" alt="Banner">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
									<div class="banner-item">
										<div class="text">
											<h3>Tomato and Pepper</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
											<a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
										</div>
										<div class="image-mask"></div>
										<img class="img-responsive" src="img/banner/home3-banner-4.jpg" alt="Banner">
									</div>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
									<div class="banner-item">
										<div class="text">
											<h3>Tomato and Pepper</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
											<a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
										</div>
										<div class="image-mask"></div>
										<img class="img-responsive" src="img/banner/home3-banner-5.jpg" alt="Banner">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- Latest News -->
				<div class="section latest-news layout-2">
					<div class="block-title">
						<h2 class="title">Our <span>Blog</span></h2>
						<div class="sub-title">Lorem ipsum dolor sit amet consectetur</div>
					</div>
					
					<div class="block-content">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="blog-item">
										<div class="blog-image">
											<a href="blog-detail.html" class="zoom-effect">
												<img src="img/blog/blog-1.jpg" alt="Blog Image">
											</a>		
										</div>
										<div class="blog-info">
											<div class="blog-time">
												<span><i class="zmdi zmdi-comments"></i>13 comment</span>
												<span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
											</div>
											<div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you fresh and healthy</a></div>
											<div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
											<div class="readmore"><a href="blog-detail.html">Read more</a></div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="blog-item">
										<div class="blog-image">
											<a href="blog-detail.html" class="zoom-effect">
												<img src="img/blog/blog-2.jpg" alt="Blog Image">
											</a>
										</div>
										<div class="blog-info">
											<div class="blog-time">
												<span><i class="zmdi zmdi-comments"></i>13 comment</span>
												<span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
											</div>
											<div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you fresh and healthy</a></div>
											<div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
											<div class="readmore"><a href="blog-detail.html">Read more</a></div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="blog-item">
										<div class="blog-image">
											<a href="blog-detail.html" class="zoom-effect">
												<img src="img/blog/blog-3.jpg" alt="Blog Image">
											</a>
										</div>
										<div class="blog-info">
											<div class="blog-time">
												<span><i class="zmdi zmdi-comments"></i>13 comment</span>
												<span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
											</div>
											<div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you fresh and healthy</a></div>
											<div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</div>
											<div class="readmore"><a href="blog-detail.html">Read more</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<!-- Testimonial -->
				<div class="section testimonial layout-2">
					<div class="container">
						<div class="row">
							<div class="testimonial-wrap owl-theme owl-carousel">
								<div class="item">
									<div class="image"><img src="img/testimonial-1.png" alt=""></div>
									<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit."</div>
									<div class="name">WILLIAM JAMES</div>
									<div class="job">Hairstyle</div>
								</div>
								
								<div class="item">
									<div class="image"><img src="img/testimonial-2.png" alt=""></div>
									<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit."</div>
									<div class="name">WILLIAM JAMES</div>
									<div class="job">Hairstyle</div>
								</div>
								
								<div class="item">
									<div class="image"><img src="img/testimonial-3.png" alt=""></div>
									<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit."</div>
									<div class="name">WILLIAM JAMES</div>
									<div class="job">Hairstyle</div>
								</div>
								
								<div class="item">
									<div class="image"><img src="img/testimonial-2.png" alt=""></div>
									<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit."</div>
									<div class="name">WILLIAM JAMES</div>
									<div class="job">Hairstyle</div>
								</div>
								
								<div class="item">
									<div class="image"><img src="img/testimonial-1.png" alt=""></div>
									<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit."</div>
									<div class="name">WILLIAM JAMES</div>
									<div class="job">Hairstyle</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
			
			
			<!-- Footer -->
			<footer id="footer">
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="footer-intro">
									<a href="home-3.html" class="logo-footer">
										<img src="img/logo-3.png" alt="Logo">
									</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									<div class="social">
										<ul>
											<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
											<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
											<li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
											<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div class="footer-top">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
											<div class="block menu">
												<h2 class="block-title">Information</h2>
												
												<div class="block-content">
													<ul>
														<li><a href="#">Specials</a></li>
														<li><a href="#">New products</a></li>
														<li><a href="#">Best sellers</a></li>
														<li><a href="#">Terms and conditions</a></li>
													</ul>
												</div>
											</div>
										</div>
											
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
											<div class="block menu">
												<h2 class="block-title">About Us</h2>
												
												<div class="block-content">
													<ul>
														<li><a href="#">Who are we ?</a></li>
														<li><a href="#">Delivery and return</a></li>
														<li><a href="#">Size guide</a></li>
														<li><a href="#">Legal Mentions</a></li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
											<div class="block menu">
												<h2 class="block-title">Your account</h2>
												
												<div class="block-content">
													<ul>
														<li><a href="#">My merchandise returns</a></li>
														<li><a href="#">My credit slips</a></li>
														<li><a href="#">My addresses</a></li>
														<li><a href="#">My personal info</a></li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
											<div class="block menu">
												<h2 class="block-title">Customer Service</h2>
												
												<div class="block-content">
													<ul>
														<li><a href="#">Store Locator</a></li>
														<li><a href="#">Returns Policy</a></li>
														<li><a href="#">Order Tracking</a></li>
														<li><a href="#">Give Back Box</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="footer-bottom">
									<div class="row">											
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-left">
											<div class="block newsletter">
												<h2 class="block-title">Newsletter</h2>
												
												<div class="block-content">
													<p class="description">Sign up for newsletter to receive special offers and exclusive news about FreshMart products</p>
													<form action="#" method="post">
														<input type="text" placeholder="Enter Your Email">
														<button type="submit" class="btn btn-primary">Subscribe</button>
													</form>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-right">
											<div class="block text">
												<h2 class="block-title">Contact Us</h2>
												
												<div class="block-content">
													<div class="contact">
														<div class="item d-flex">
															<div>
																<i class="zmdi zmdi-home"></i>
															</div>
															<div>
																<span>123 Suspendis matti, VST District, NY Accums, North Palakkad</span>
															</div>
														</div>
														<div class="item d-flex">
															<div>
																<i class="zmdi zmdi-phone-in-talk"></i>
															</div>
															<div>
																<span>0123-456-78910<br>0987-654-32100</span>
															</div>
														</div>
														<div class="item d-flex">
															<div>
																<i class="zmdi zmdi-email"></i>
															</div>
															<div>
																<span><a href="mailto:support@domain.com">support@domain.com</a><br><a href="mailto:contact@domain.com">contact@domain.com</a></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>	
								</div>
									
								<div class="footer-copyright">
									<div class="row">
										<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<div class="copyright"><a target="_blank" href="#">Farm Fresh</a></div>
							</div>
										</div>
										
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
											<div class="payment">
												<img src="img/payment.png" alt="Payment">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			
			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fa fa-long-arrow-up"></i>
				</a>
			</div>
			
			<!-- Page Loader -->
			<div id="page-preloader">
				<div class="page-loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>
		
		<!-- Vendor JS -->
		<script src="libs/jquery/jquery.js"></script>
		<script src="libs/bootstrap/js/bootstrap.js"></script>
		<script src="libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="libs/slider-range/js/tmpl.js"></script>
		<script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="libs/slider-range/js/draggable-0.1.js"></script>
		<script src="libs/slider-range/js/jquery.slider.js"></script>
		<script src="libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="js/main.js"></script>
	</body>


</html>