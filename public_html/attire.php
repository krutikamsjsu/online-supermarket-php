<?php
$trace = [];
if(isset($_COOKIE['activity_cookie'])){
    $trace = unserialize($_COOKIE["activity_cookie"]);
}
array_push($trace, "Attire");    
setcookie("activity_cookie",serialize($trace),time()+60*60*24*5);
?>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Indian Attires</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/hexagons.min.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			  <header id="header" id="home">
					<div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">About Us</a></li>
				          <li><a href="news.php">News</a></li>
				          <li><a href="products.php">Products</a></li>
				          <li><a href="contact.php">Contact</a></li>
							<?php
				           if(isset($_COOKIE['user_cookie'])){
				               echo "<li><a href='#'>Hi ".unserialize($_COOKIE["user_cookie"])["name"]." </a></li>";
				               echo "<li><a href='myActivity.php'>My Activity</a></li>";
				           }else{
				                echo "<li><a href='registeruser.php'>Register</a></li>";
								echo "<li><a href='login.php'>Login</a></li>";
				           }
				          ?>
				        </ul>
				      </nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Indian Attire Section
							</h1>
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="product-details.php">Indian Attires Section</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start price Area -->
			<section class="price-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Featured Indian Attires to Show</h1>
								<p>	Who are in extremely love with Indian Attires.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="wethinic.php">
										<img class="mx-auto-ayur"  src="img/wethinic.jpg" alt="wethinic-image" width=210px height=170px></a>
								</div>
								<div class="package-list">
									<h4>Womens Ethinic</h4>
									<p>
										Look Gracefull
									</p>
									<ul>
										<li>Lehengas,Gagrahs</li>
										<li>Sarees and many more...</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$230.00</h1>
									<a class="primary-btn text-uppercase" href="wethinic.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="wcasual.php">
										<img class="mx-auto-ayur" src="img/wcasual.jpg" alt="wcasual-image" width=210px height=170px></a>
								</div>
								<div class="package-list">
									<h4>Womens Casual</h4>
									<!-- <h4> and Balms</h4> -->
									<p>Slay your casual look</p>
									<ul>
										<li>	chudidhars,patiyalas</li>
										<li> Half sarees and many more...</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$80.00</h1>
									<a class="primary-btn text-uppercase" href="wcasual.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
										<a href="methinic.php">
										<img class="mx-auto" src="img/methinic.jpg" alt="methinic-image" width=210px height=170px></a>
								</div>
								<div class="package-list">
									<h4>Mens ethinic</h4>
									<p>Ace your looks</p>
									<ul>
										<li>Anagrah, Shervanis</li>
										<li> and many more...
										</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$300.00</h1>
									<a class="primary-btn text-uppercase" href="methinic.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="mcasual.php">
										<img class="mx-auto" src="img/mcasual.jpg" alt="mcasual-image" width=210px height=170px></a>

								</div>
								<div class="package-list">
									<h4>Mens Casual</h4>
									<p>Be casual be smart</p>
									<ul>
										<!-- <li>Proud to introduce our nursery section!</li> -->
										<li>dhothi,lungi,</li>
										<li> patiyala and many more..</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$60.00</h1>
									<a class="primary-btn text-uppercase" href="mcasual.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="wgold.php">
										<img class="mx-auto" src="img/wgold.jpg" alt="wgold-image" width=210px height=170px>
									</a>

								</div>
								<div class="package-list">
									<h4>Womens Jewelery</h4>
									<p>Wide variety of Jewelery</p>
									<ul>
										<li>Gold,silver,platinum</li>
										<li>diamond  and many more...</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$400.00</h1>
									<a class="primary-btn text-uppercase" href="wgold.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="mgold.php">
										<img class="mx-auto" src="img/mgold.jpg" alt="mgold-image" width=210px height=170px>
									</a>

								</div>
								<div class="package-list">
									<h4>Mens gold</h4>
									<p>Wide variety of Jewelery</p>
									<ul>
										<li>Gold,silver,platinum</li>
										<li> diamond  and many more...</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$788.00</h1>
									<a class="primary-btn text-uppercase" href="mgold.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="kdress.php">
										<img class="mx-auto" src="img/kdress.jpg" alt="kdress-image" width=210px height=170px>
									</a>

								</div>
								<div class="package-list">
									<h4>Kids dress</h4>
									<p>Introduce tradition to your kids</p>
									<ul>
										<li>All the adult section things are available here</li>
										<li>Custom made can be done...</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$100.00</h1>
									<a class="primary-btn text-uppercase" href="kdress.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="kjew.php">
										<img class="mx-auto" src="img/kjew.jpg" alt="kjew-image" width=210px height=170px>
									</a>
								</div>
								<div class="package-list">
								<h4>Kids jewelery</h4>
									<p>Introduce tradition to your kids</p>
									<ul>
										<li>All the adult section things are available here</li>
										<li>Custom made can be done...</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$596.00</h1>
									<a class="primary-btn text-uppercase" href="kjew.php">Buy Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End price Area -->

			<!-- Start feature Area -->
			<section class="feature-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10 text-white">Some Features that Made us Unique</h1>
							<p class="text-white">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">

						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#" class="title d-flex flex-row">
									<span class="lnr lnr-license"></span>
									<h4>Professional Service</h4>
								</a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#" class="title d-flex flex-row">
									<span class="lnr lnr-phone"></span>
									<h4>Great Support</h4>
								</a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#" class="title d-flex flex-row">
									<span class="lnr lnr-bubble"></span>
									<h4>Positive Reviews</h4>
								</a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- End feature Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-12">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div>

											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div>
										</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/hexagons.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
