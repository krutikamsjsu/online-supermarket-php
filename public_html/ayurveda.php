<?php
$trace = [];
if(isset($_COOKIE['activity_cookie'])){
    $trace = unserialize($_COOKIE["activity_cookie"]);
}
array_push($trace, "Ayurveda");    
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
		<title>Ayurvedic Product details</title>

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
								Ayurveda Products
							</h1>
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="product-details.php">Ayurvedic Products</a></p>
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
								<h1 class="mb-10">Explore the <i>Ayurveda</i> section</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="ayur1.php">
										<img class="mx-auto-ayur"  src="img/ayur1.jpg" alt="ayurveda-image" width=210px height=170px></a>
								</div>
								<div class="package-list">
									<h4>Spices</h4>
									<p>For a healthy lifestyle</p>
									<ul>
										<li>Make healthy your first choice.</li>
										<li>Try some authentic Indian spices</li>
										<li>First order gets free delivery!</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$27.00</h1>
									<a class="primary-btn text-uppercase" href="ayur1.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="ayur2.php">
										<img class="mx-auto-ayur" src="img/ayur2.jpg" alt="ayurveda-image" width=210px height=170px></a>
								</div>
								<div class="package-list">
									<h4>Essential Oils</h4>
									<!-- <h4> and Balms</h4> -->
									<p>Oils and Balms</p>
									<ul>
										<li>Often have a headache or bodyache?</li>
										<li>Try natural oils from the Nilgiris</li>
										<li>specially made for you!</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$19.00</h1>
									<a class="primary-btn text-uppercase" href="ayur2.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
										<a href="ayur3.php">
										<img class="mx-auto" src="img/ayur3.jpg" alt="ayurveda-image" width=210px height=170px></a>
								</div>
								<div class="package-list">
									<h4>Ayurveda Elixirs</h4>
									<p>Special potions</p>
									<ul>
										<li>Often feel drained and loss of energy?</li>
										<li>Try some of our natural elixis
										</li>
										<li>specially made for you!</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$25.00</h1>
									<a class="primary-btn text-uppercase" href="ayur3.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="ayur4.php">
										<img class="mx-auto" src="img/ayur4.jpg" alt="ayurveda-image" width=210px height=170px></a>

								</div>
								<div class="package-list">
									<h4>Ayurveda Garden</h4>
									<p>Get your ayurveda garden!</p>
									<ul>
										<!-- <li>Proud to introduce our nursery section!</li> -->
										<li>Welcome a greener earth!</li>
										<li>Grow some of the most healthy herbs</li>
										<li>right in your garden!</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$30.00</h1>
									<a class="primary-btn text-uppercase" href="ayur4.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="ayur5.php">
										<img class="mx-auto" src="img/ayur5.jpeg" alt="ayurveda-image" width=210px height=170px>
									</a>

								</div>
								<div class="package-list">
									<h4>Yoga </h4>
									<p>and health sessions</p>
									<ul>
										<li>Do you often feel drained and loss of energy?</li>
										<li>Well! You should start doing </li>
										<li>Yoga for fitness.</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$40.00</h1>
									<a class="primary-btn text-uppercase" href="ayur5.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="ayur6.php">
										<img class="mx-auto" src="img/ayur6.jpeg" alt="ayurveda-image" width=210px height=170px>
									</a>

								</div>
								<div class="package-list">
									<h4>Feeling Divine</h4>
									<p>What is it like?</p>
									<ul>
										<li>Often feel stressed?</li>
										<li>Come and experience how divinity feels, </li>
										<li>have a massage and forget everything else.</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$55.00</h1>
									<a class="primary-btn text-uppercase" href="ayur6.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="ayur7.php">
										<img class="mx-auto" src="img/ayur7.jpeg" alt="ayurveda-image" width=210px height=170px>
									</a>

								</div>
								<div class="package-list">
									<h4>Healthy Recipes</h4>
									<p>Recipe books for you</p>
									<ul>
										<li>Are you bored of eating same unhealthy foods?</li>
										<li>Try some amazing and </li>
										<li>super healthy recipes from these amazing books.</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$12.00</h1>
									<a class="primary-btn text-uppercase" href="ayur7.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="ayur8.php">
										<img class="mx-auto" src="img/ayur8.jpeg" alt="ayurveda-image" width=210px height=170px>
									</a>
								</div>
								<div class="package-list">
									<h4>Need Therapist?</h4>
									<p>For the individuals</p>
									<ul>
										<li>Are you stressed to a point of giving up?</li>
										<li>Talk to our therapists </li>
										<li>life of thousands changed...and counting..</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$56.00</h1>
									<a class="primary-btn text-uppercase" href="ayur8.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="ayur9.php">
										<img class="mx-auto" src="img/ayur9.jpeg" alt="ayurveda-image" width=210px height=170px>
									</a>
								</div>
								<div class="package-list">
									<h4>Wellness Center</h4>
									<p>For the individuals</p>
									<ul>
										<li>Fulfilling and de-stressing vacation?</li>
										<li>We welcome you to our Welness center.</li>
										<li>Here you come and never wish to go back at all!</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$70.00</h1>
									<a class="primary-btn text-uppercase" href="ayur9.php">Buy Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-price">
								<div class="top-part">
									<a href="ayur10.php">
										<img class="mx-auto" src="img/ayur10.jpeg" alt="ayurveda-image" width=210px height=170px>
									</a>
								</div>
								<div class="package-list">
									<h4>Special demands?</h4>
									<p>We customize for you!</p>
									<ul>
										<li>Need something not on our list?</li>
										<li>Please feel free to get in touch with us,</li>
										<li>and let us know whatever you need.</li>
									</ul>
								</div>
								<div class="bottom-part">
									<h1>$80.00</h1>
									<a class="primary-btn text-uppercase" href="ayur10.php">Buy Now</a>
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
