<?php
include('db_connect/db.php');	
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Green Snow</title>
		
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
									<a href="home-3.html">
										<img class="img-responsive" src="img/logo.png" alt="Logo">
									</a>
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
			</div>
			
			<!-- Product Start -->
            
            <div class="container">
					<div class="row">
						<!-- Sidebar -->
						<div id="left-column" class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<!-- Block - Product Categories -->
							<div class="block product-categories">
								<h3 class="block-title">Categories</h3>
								
								<div class="block-content">
									<div class="item">
										<span class="arrow collapsed" data-toggle="collapse" data-target="#vegetables" aria-expanded="false" role="button">
											<i class="zmdi zmdi-minus"></i>
											<i class="zmdi zmdi-plus"></i>
										</span>
										
										<a class="category-title" href="product-grid-left-sidebar.html">Vegetables</a>
										<div class="sub-category collapse" id="vegetables" aria-expanded="true" role="main">
											<div class="item">
												<a href="product-grid-left-sidebar.html">Tomato</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Broccoli</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Cabbage</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Cucumber</a>
											</div>
										</div>
									</div>
									
									<div class="item">
										<span class="arrow collapsed" data-toggle="collapse" data-target="#fruits" aria-expanded="false" role="button">
											<i class="zmdi zmdi-minus"></i>
											<i class="zmdi zmdi-plus"></i>
										</span>
										
										<a class="category-title" href="product-grid-left-sidebar.html">Fruits</a>
										<div class="sub-category collapse" id="fruits" aria-expanded="true" role="main">
											<div class="item">
												<a href="product-grid-left-sidebar.html">Orange</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Apple</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Banana</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Strawberry</a>
											</div>
										</div>
									</div>
									
									<div class="item">
										<span class="arrow collapsed" data-toggle="collapse" data-target="#juices" aria-expanded="false" role="button">
											<i class="zmdi zmdi-minus"></i>
											<i class="zmdi zmdi-plus"></i>
										</span>
										
										<a class="category-title" href="product-grid-left-sidebar.html">Juices</a>
										<div class="sub-category collapse" id="juices" aria-expanded="true" role="main">
											<div class="item">
												<a href="product-grid-left-sidebar.html">Orange Juices</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Tomato Juices</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Apple Juices</a>
											</div>
											<div class="item">
												<a href="product-grid-left-sidebar.html">Peaches Juices</a>
											</div>
										</div>
									</div>
									
									<div class="item">
										<a class="category-title" href="product-grid-left-sidebar.html">Tea and Coffee</a>
									</div>
									
									<div class="item">
										<a class="category-title" href="product-grid-left-sidebar.html">Jam</a>
									</div>
									
									<div class="item">
										<a class="category-title" href="product-grid-left-sidebar.html">SeaFood</a>
									</div>
									
									<div class="item">
										<a class="category-title" href="product-grid-left-sidebar.html">Fresh Meats</a>
									</div>
								</div>
							</div>
							
							
							<!-- Block - Filter -->
							<div class="block product-filter">
								<h3 class="block-title">Catalog</h3>
							
								<div class="block-content">
									<div class="filter-item">
										<h3 class="filter-title">Categories</h3>
										
										<div class="filter-content">
											<ul>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Tomato <span class="quantity">(20)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Broccoli <span class="quantity">(14)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Cabbage <span class="quantity">(8)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Cucumber <span class="quantity">(12)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Eggplant <span class="quantity">(15)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Pea <span class="quantity">(22)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Pineapple <span class="quantity">(20)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Lettuce <span class="quantity">(10)</span></a>
													</label>
												</li>
											</ul>
										</div>
									</div>
									
									<div class="filter-item">
										<h3 class="filter-title">Manufacture</h3>
										
										<div class="filter-content">
											<ul>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Samsung <span class="quantity">(20)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Dell <span class="quantity">(14)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Polygon <span class="quantity">(8)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Newment <span class="quantity">(12)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Asus <span class="quantity">(15)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Mac <span class="quantity">(22)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Vaio <span class="quantity">(20)</span></a>
													</label>
												</li>
												<li>
													<label class="check">
														<span class="custom-checkbox">
															<input type="checkbox">
															<span class="checkmark"></span>
														</span>
														<a>Lettuce <span class="quantity">(10)</span></a>
													</label>
												</li>
											</ul>
										</div>
									</div>
									
									<div class="filter-item">
										<h3 class="filter-title">By Price</h3>
										
										<div class="block-content">
											<div id="slider-range" class="tiva-filter">
												<div class="filter-item price-filter">
													<div class="layout-slider">
														<input id="price-filter" name="price" value="0;100" />
													</div>
													<div class="layout-slider-settings"></div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="filter-item">
										<h3 class="filter-title">By Color</h3>
										
										<div class="block-content">
											<div class="filter-color">
												<div class="left">
													<div class="item">
														<label class="color color-1"></label>
														<span class="color-label">Blue</span>
														<span>(3)</span>
													</div>
													<div class="item">
														<label class="color color-3"></label>
														<span class="color-label">Yellow</span>
														<span>(2)</span>
													</div>
													<div class="item">
														<label class="color color-5"></label>
														<span class="color-label">Pink</span>
														<span>(2)</span>
													</div>
												</div>
												<div class="right">
													<div class="item">
														<label class="color color-2"></label>
														<span class="color-label">Green</span>
														<span>(1)</span>
													</div>
													<div class="item">
														<label class="color color-4"></label>
														<span class="color-label">Brown</span>
														<span>(3)</span>
													</div>
													<div class="item">
														<label class="color color-6"></label>
														<span class="color-label">Red</span>
														<span>(10)</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Product Tags -->
							<div class="block tags product-tags">
								<h3 class="block-title">Product Tags</h3>
							
								<div class="block-content">
									<ul>
										<li><a href="#" title="Show products matching tag Hot Trend">Hot Trend</a></li>
										<li><a href="#" title="Show products matching tag Jewelry">Jewelry</a></li>
										<li><a href="#" title="Show products matching tag Man">Man</a></li>
										<li><a href="#" title="Show products matching tag Party">Party</a></li>
										<li><a href="#" title="Show products matching tag SamSung">SamSung</a></li>
										<li><a href="#" title="Show products matching tag Shirt Dresses">Shirt Dresses</a></li>
										<li><a href="#" title="Show products matching tag Shoes">Shoes</a></li>
										<li><a href="#" title="Show products matching tag Summer">Summer</a></li>
										<li><a href="#" title="Show products matching tag Sweaters">Sweaters</a></li>
										<li><a href="#" title="Show products matching tag Winter">Winter</a></li>
										<li><a href="#" title="Show products matching tag Woman">Woman</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<!-- Page Content -->
						<div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="product-category-page">
								<!-- Nav Bar -->
								<div class="products-bar">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<div class="gridlist-toggle" role="tablist">
												<ul class="nav nav-tabs">
													<li class="active"><a href="#products-grid" data-toggle="tab" aria-expanded="true"><i class="fa fa-th-large"></i></a></li>
													<li><a href="#products-list" data-toggle="tab" aria-expanded="false"><i class="fa fa-bars"></i></a></li>
												</ul>
											</div>
											
											<div class="total-products">There are 12 products</div>
										</div>
										
										<div class="col-md-6 col-xs-6">
											<div class="filter-bar">
												<form action="#" class="pull-right">
													<div class="select">
														<select class="form-control">
															<option value="">Sort By</option>
															<option value="1">Price: Lowest first</option>
															<option value="2">Price: Highest first</option>
															<option value="3">Product Name: A to Z</option>
															<option value="4">Product Name: Z to A</option>
															<option value="5">In stock</option>
														</select>
													</div>
												</form>
												<form action="#" class="pull-right">
													<div class="select">
														<select class="form-control">
															<option value="">Relevance</option>
															<option value="1">Price: Lowest first</option>
															<option value="2">Price: Highest first</option>
															<option value="3">Product Name: A to Z</option>
															<option value="4">Product Name: Z to A</option>
															<option value="5">In stock</option>
														</select>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								
								<div class="tab-content">
									<!-- Products Grid -->
									<div class="tab-pane active" id="products-grid">
										<div class="products-block">
											<div class="row">
												
                                                 <?php
													$name=$_POST['name'];
													$result = $db->prepare("SELECT * FROM labor where wrk='$name'");
													$result->execute();
													$row_count =  $result->rowcount();
													for($i=0; $rows = $result->fetch(); $i++)
													{
													 ?>
												?>
												
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
													<div class="product-item">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
														<img class="img-responsive" src="photo/<?php echo $rows["photo"];?>" alt="Product Image">
															</a>
														</div>
														
														<div class="product-title">
															<a href="#">
																<?php echo $rows["name"];?>
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
															<span class="fa fa-user"> <?php echo $rows["wrk"];?></span>
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
												 <?php
													}
													?>
											</div>
										</div>
									</div>
									
									<!-- Products List -->
									<div class="tab-pane" id="products-list">
										<div class="products-block layout-5">
											<?php
												$result = $db->prepare("SELECT * FROM labor where wrk='$name'");
												$result->execute();
												$row_count =  $result->rowcount();
												for($i=0; $rows = $result->fetch(); $i++)
												{
											?>
                                            <div class="product-item">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img class="img-responsive" src="photo/<?php echo $rows["photo"];?>">
															</a>
														</div>
													</div>
													
													<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
														<div class="product-info">
															<div class="product-title">
																<a href="product-detail-left-sidebar.html">
																	<?php echo $rows["name"];?>
																</a>
															</div>
															
															<div class="product-rating">
																<div class="star on"></div>
																<div class="star on"></div>
																<div class="star on "></div>
																<div class="star on"></div>
																<div class="star"></div>
																<span class="review-count">(3 Reviews)</span>
															</div>
															
															<div class="product-price">
																<span class="fa fa-user"><?php echo $rows["wrk"];?></span>
															</div>															
															
															<div class="product-description">
																<?php echo $rows["expr"];?>
															</div>
															
															<div class="product-buttons">
																<a class="add-to-cart" href="#">
																	<i class="fa fa-shopping-basket" aria-hidden="true"></i>
																	<span>More</span>
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
											
											<?php
													}
													?>
										
											
										</div>
									</div>
								</div>
								
								<!-- Pagination Bar -->
								<div class="pagination-bar">
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="text">Showing 1-12 of 20 item(s)</div>
										</div>
										
										<div class="col-md-8 col-sm-8 col-xs-12">
											<div class="pagination">
												<ul class="page-list">
													<li><a href="#" class="prev">Previous</a></li>
													<li><a href="#" class="current">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#" class="next">Next</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>		
			<footer id="footer">
				<div class="footer">
					<!-- Footer Top -->
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block text">
										<div class="block-content">
											<a href="index.html" class="logo-footer">
												<img src="img/logo-2.png" alt="Logo">
											</a>
									
											<div class="contact">
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-home"></i>
													</div>
													<div class="item-right">
														<span>123 Suspendis matti, VST District, NY Accums, North Palakkad</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-phone-in-talk"></i>
													</div>
													<div class="item-right">
														<span>0123-456-78910<br>0987-654-32100</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-email"></i>
													</div>
													<div class="item-right">
														<span><a href="mailto:support@domain.com">support@domain.com</a><br><a href="mailto:contact@domain.com">contact@domain.com</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block instagram">
										<h2 class="block-title">Photo Instagram</h2>
										
										<div class="block-content">
											<div class="row margin-0">
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-1.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-2.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-3.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-4.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-5.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-6.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-7.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="img/instagram-8.png" alt="Instagram Image">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
										
									<div class="block social">
										<h2 class="block-title">Follow Us</h2>
										
										<div class="block-content">
											<ul>
												<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Footer Bottom -->
					<div class="footer-bottom">
						<div class="payment-intro">
							<div class="container">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/home1-payment-1.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Free Shipping item</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/home1-payment-2.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Secured Payment</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/home1-payment-3.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Money Back Guarantee</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Copyright -->
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<div class="copyright"><a target="_blank" href="#">Farm Finder</a></div>
							</div>
							
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
								<div class="payment">
									<span>Payment Accept</span>
									<img src="img/payment.png" alt="Payment">
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