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
		<title>Home</title>

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
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-6 col-md-6">
							<h1>
								Best Quality <br>
								Relaible <br>
								products for you
							</h1>
							<p class="text-white text-uppercase">
								We bring you the premier quality products from India.. .
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase">View Details</a>
						</div>
						<div class="banner-img col-lg-6 col-md-6">
							<!-- <img class="img-fluid" src="img/banner-img.png" alt=""> -->
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start products Area -->
			<section class="products-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Explore variety of products we bring to you... </h1>
							<p>
								Who are in extremely in love with eco friendly system..
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<div class="thumb">
									<img src="img/family.jpg" alt="" width=200px height=200px>
								</div>
								<div class="details">
									<h4>The Attire Section</h4>
									<p>
										Who are in extremely love with eco friendly system.
									</p>
									<a href="attire.php" class="primary-btn text-uppercase">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<div class="thumb">
									<img src="img/grocery-head.jpeg" alt="" width=200px height=200px>
								</div>
								<div class="details">
									<h4>The Grocery Section</h4>
									<p>
										Who are in extremely love with eco friendly system.
									</p>
									<a href="groceries1.php" class="primary-btn text-uppercase">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<div class="thumb">
									<img src="img/kitchen-head.jpeg" alt="" border-radius=10px width=200px height=200px>
								</div>
								<div class="details">
									<h4>The Kitchen Products</h4>
									<p>
										Who are in extremely love with eco friendly system.
									</p>
									<a href="kitchen.php" class="primary-btn text-uppercase">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<div class="thumb">
									<a href="ayurveda.php"><img src="img/ayurveda-head.jpeg" alt="" width=200px height=200px></a>
								</div>
								<div class="details">
									<h4>The Ayurveda Section</h4>
									<p>
										Who are in extremely love with eco friendly system.
									</p>
									<a href="ayurveda.php" class="primary-btn text-uppercase">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End products Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left no-padding">
							<img class="mx-auto d-block img-fluid" src="img/globally.jpg" alt="" border-radius=5px>
						</div>
						<div class="col-lg-6 home-about-right no-padding">
							<h1>Globally Connected <br>
							by Large Network</h1>
							<h5>
								We are here to listen from you deliver exellence
							</h5>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<a class="primary-btn text-uppercase" href="#">Get Details</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End home-about Area -->


			<!-- Start about-video Area -->
			<section class="about-video-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-video-left">
							<h6 class="text-uppercase">Brand new app to blow your mind</h6>
							<h1>
								No member fees? <br>
								Yes please.
							</h1>
							<p>
								<span>Discover 5 reasons to love free</span><br>
								2-Day Shipping & no member fees.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a class="primary-btn" href="#">Get Started Now</a>
						</div>
						<div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex relative">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/shipping.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</section>
			<!-- End about-video Area -->


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
						<!-- <div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#" class="title d-flex flex-row">
									<span class="lnr lnr-user"></span>
									<h4>Expert Technicians</h4>
								</a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div> -->
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
						<!-- <div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#" class="title d-flex flex-row">
									<span class="lnr lnr-rocket"></span>
									<h4>Technical Skills</h4>
								</a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div> -->
						<!-- <div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<a href="#" class="title d-flex flex-row">
									<span class="lnr lnr-diamond"></span>
									<h4>Highly Recomended</h4>
								</a>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div> -->
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


			<!-- Start brand Area -->
			<section class="brand-area pt-120">
				<div class="container">
					<div class="row align-items-center">
						<div class="col single-brand">
							<img class="img-fluid" src="img/l1.png" alt="">
						</div>
						<div class="col single-brand">
							<img class="img-fluid" src="img/l2.png" alt="">
						</div>
						<div class="col single-brand">
							<img class="img-fluid" src="img/l3.png" alt="">
						</div>
						<div class="col single-brand">
							<img class="img-fluid" src="img/l4.png" alt="">
						</div>
						<div class="col single-brand">
							<img class="img-fluid" src="img/l5.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End brand Area -->


			<!-- Start blog Area -->
			<section class="blog-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Latest News from our Blog</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 blog-left">
							<div class="thumb">
								<img class="img-fluid" src="img/best-tech.jpeg" alt="" width=480px height=260px>
							</div>
							<div class="detais">
								<ul class="tags">
									<li><a href="#">Travel</a></li>
									<li><a href="#">Life Style</a></li>
								</ul>
								<a href="#"><h4>Best technology appliances and products for your kitchen</h4></a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
								</p>
								<p class="date">31st January, 2018</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 blog-right">
							<div class="thumb">
								<img class="img-fluid" src="img/b2.jpg" alt="">
							</div>
							<div class="detais">
								<ul class="tags">
									<li><a href="#">Travel</a></li>
									<li><a href="#">Life Style</a></li>
								</ul>
								<a href="#"><h4>Check out latest fashion updates for young men and women</h4></a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
								</p>
								<p class="date">31st January, 2018</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End blog Area -->

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
