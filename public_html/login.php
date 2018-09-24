<?php
include("conection.php");
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysql_query("SELECT * FROM user WHERE email='".$username."'");

if ($result !== false) {
    $pwd = "";
while($row = mysql_fetch_array($result))
  {
    $pwd = $row["password"];
    $name = $row["first_name"];
  }

if($password==$pwd)
{
    $userDetails = [];
    $userDetails["email"] = $username;
    $userDetails["name"] = $name;
    setcookie("user_cookie",serialize($userDetails));
	header("Location: index.php");
}
else
{
print("<p style='text-align:center;background-color:red;padding:20px;color:white'>Incorrect Credentials. Please try again.</p>");
}
    
} else {
    // an error has occured
    echo mysql_error();
    die;
}
}

	require_once "fbconfig.php";

	if (isset($_SESSION['access_token'])) {
	    print "inside access_token";
		header('Location: fbindex.php');
		exit();
	}

	$redirectURL = "https://cmpe-272-project.ga/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
	
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
		<title>Login</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<style>
			.ml-15{
			    margin-left:-15px;
			}
			.checked {
                color: orange;
            }
            .content{
                    margin: auto;
                    max-width: 500px;
            }
            </style>
		</head>
		<body>
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">About Us</a></li>
				          <li><a href="news.php">News</a></li>
				          <li><a href="products.php">Products</a></li>
				          <li><a href="contact.php">Contact</a></li>
									<li><a href="registeruser.php">Register</a></li>
									<li><a href="login.php">Login</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row" style="height:150px !important;">
						<div class="banner-content col-lg-6 col-md-6">
						</div>
						<div class="banner-img col-lg-6 col-md-6">
							<!-- <img class="img-fluid" src="img/banner-img.png" alt=""> -->
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start products Area -->
            <section class="home-about-area" style="margin-top:30px;margin-bottom:50px;">
				<div class="container-fluid content">
					<div class="align-items-center">
						<form action="login.php" method="post" style="text-align:center;">
                    		<div id="body" class="contact">
                    			<div>
                    				<h1>Login</h1><br><br><br>
                    				<p>UserName</p>
                    				<input type="text" name="username"/>
                    				<p class="mt20">Password</p>
                    				<input type="password" name="password"/>
                    				<p class="mt20">
                    				<input type="submit" class="primary-btn" value="Login"/>
                    				</p>
                    				<p>
                    				<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="btn btn-primary">
                    				</p>
                    			</div>
                    		</div>
                    		</form>
					</div>
				</div>	
			</section>
			

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
