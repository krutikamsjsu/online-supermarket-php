<!DOCTYPE html>
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
	<title>Cart</title>

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
}</style>
 <script>
    function show() {
        document.getElementById("price").innerHTML = "dummyVal" ;
    }
    
    show();
    </script>
    
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
								<li><a href="products.php">Register</a></li>
								<li><a href="products.php">Login</a></li>
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
						<!--<img class="mx-auto d-block img-fluid" src="img/cart.png" alt="">-->
						
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start products Area -->
					<section class="home-about-area" style="margin-top:30px;margin-bottom:50px;">
			<div class="container-fluid">
			    	   
				<div class="row align-items-center">
				    	    <p> </p>
					<div class="col-md-3 col-md-offset-5 container-fluid home-about-left no-padding" style="margin-top: 40px;">
					    	<img class="mx-auto d-block img-fluid" src="img/cart.png" alt="">
					   
					    <!--<div>-->
					    <!--    <p>-->
					            
					    <!--    </p>-->
					    <!--</div>-->
					
					
					<div class="bottom-part">
					
					<!--    <p></p>-->
					<!--				<h5> $7.00 - $20.00 per lb</h5>-->
									<!--<a class="primary-btn text-uppercase" href="ayur1.html">Buy Now</a>-->
					</div>
					</div>
					<div class="col-lg-6 home-about-right no-padding">
					     <h1>Items in your cart</h1>
					     <h5>Please review your shopping cart before checkout</h5>
					     <p>
					        <table style="width:100%">
                                  <tr>
                                    <th>Item ID</th>
                                    <th>Product</th> 
                                    <th>Quantity</th>
                                    <th>Price</th>
                                  </tr>
                                  
                    <?php
                                        if(isset($_COOKIE['AddToCart_cookie'])){
                                            $count = 0;
            	                        foreach(unserialize($_COOKIE['AddToCart_cookie']) as $key=> $value ){
                	                    if($value == "Ayurveda Elixir"){
                	                        $count++;
                	                       // $key = array_search('Ayurveda Elixir', $cart);
        			?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Ayurveda Elixir</td> 
                                    <td>01</td>
                                    <td id="price">$25.00</td>
                                    </tr>
                    
                    <?php
                	                     }
                                            elseif($value == "Spices"){
                                                $count++;
                                            // $key = array_search('Spices', $cart);
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Spices</td> 
                                    <td>01</td>
                                    <td id="price">$27.00</td>
                                    </tr>
                    
                    <?php
                                                
                                            }
                                                elseif($value == "Essential Oils"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Essential Oils</td> 
                                    <td>01</td>
                                    <td id="price">$19.00</td>
                                    </tr>
                    <?php 
                                }
                                 elseif($value == "Ayurveda Garden Plant"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Ayurveda Garden Plant</td> 
                                    <td>01</td>
                                    <td id="price">$30.00</td>
                                    </tr>
                    <?php
                                 }
                                 elseif($value == "Yoga Session"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Yoga Session</td> 
                                    <td>01</td>
                                    <td id="price">$40.00</td>
                                    </tr>
                    <?php
                                 }
                                 elseif($value == "Therapy Massage"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Therapy Massage</td> 
                                    <td>01</td>
                                    <td id="price">$55.00</td>
                                    </tr>
                    <?php
                                 }
                                 elseif($value == "Recipe Book"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Recipe Book</td> 
                                    <td>01</td>
                                    <td id="price">$12.00</td>
                                    </tr>
                    <?php
                                 }
                                 elseif($value == "Therapist Appointment"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Therapist Appointment</td> 
                                    <td>01</td>
                                    <td id="price">$56.00</td>
                                    </tr>
                    <?php
                                 }
                                 elseif($value == "Wellness Center"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Wellness Center</td> 
                                    <td>01</td>
                                    <td id="price">$70.00</td>
                                    </tr>
                    <?php
                                 }
                                 elseif($value == "Flour"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Flour</td> 
                                    <td>01</td>
                                    <td id="price">$40.00</td>
                                    </tr>
                    <?php
                                 }
                                 elseif($value == "On demand items"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Customized products</td> 
                                    <td>01</td>
                                    <td id="price">$80.00</td>
                                    </tr>
                    <?php
                     
                                 }
                                 elseif($value == "Wethinic"){
                                                $count++;
                                           
                    ?>
        			                <tr>
        			                <td><?php echo $count; ?></td>
                                    <td>Womens ethinic</td> 
                                    <td>01</td>
                                    <td id="price">$230.00</td>
                                    </tr>
                    <?php
                                 }
                                    
                                 
            	}
           }
                	?>
                            </table>
					       
					     </p>
					    	<!--<img class="mx-auto d-block img-fluid" src="img/cart.png" alt="">-->
					    	<a class="primary-btn text-uppercase" href="products.php">Shop More</a>
					    	<a class="primary-btn text-uppercase" href="https://www.paypal.com">Checkout</a>
						<!--<h3>Below are the items in your cart</h3>-->
					</div>
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