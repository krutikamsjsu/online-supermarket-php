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
		<title>Recent activities</title>

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
								Recent activities
							</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						
							<div class="single-contact-address d-flex flex-row">
								<!--<div class="icon">-->
								<!--	<span class="lnr lnr-home"></span>-->
								<!--</div>-->
								<div ><p>
								    <a href="#">	<h5>Most recently visited products :</h5></a>
									</p></br><p>
		<?php
           if(isset($_COOKIE['Product_cookie'])){
               $products = unserialize($_COOKIE['Product_cookie']);
               arsort($products);
            	foreach($products as $key=> $value ){
                	if($value == "Product1"){
        			?>
	                	    <p><b>Spices</b></p>
	                	    <a href="ayur1.php"><img class="let_hover" src="img/ayur1.jpg" alt="" width=210px height=170px></a>
                    <?php
                        }
                    
                    if($value == "Product2"){
        			?>
	        			    <p>Essential Oils and Balms</p>
	        			    <a href="ayur2.php"><img src="img/ayur2.jpg" alt="" width=210px height=170px></a>
	        		<?php
                        }
                    
                    if($value == "Flour"){
        			?>
	        			    <p>Flour</p>
	        			    <a href="flour.php"><img src="img/flour.jpg" alt="" width=210px height=170px></a>
	        		<?php
                        }
                    
                    if($value == "Fruits"){
        			?>
	        			    <p>Fruits</p>
	        			    <a href="fruits.php"><img src="img/fruits.png" alt="" width=210px height=170px></a>
	        		<?php
                        }
                    
                    if($value == "Milkp"){
        			?>
	        			    <p>Milk_Products</p>
	        			    <a href="milkp.php"><img src="img/milkp.jpg" alt="" width=210px height=170px></a>
	        		<?php
                        }
                    
                    if($value == "Grains"){
        			?>
	        			    <p>Grains</p>
	        			    <a href="grains.php"><img src="img/grains.jpg" alt="" width=210px height=170px></a>
	        		<?php
                        }
                    
                    if($value == "Vegetables"){
        			?>
	        			    <p>Vegetables</p>
	        			    <a href="vegetables.php"><img src="img/vegetables.png" alt="" width=210px height=170px></a>
	        		<?php
                        }
                    
                    if($value == "Sweets"){
        			?>
	        			    <p>Sweets</p>
	        			    <a href="sweets.php"><img src="img/sweets.png" alt="" width=210px height=170px></a>
	        		<?php
                        }
                    
                    if($value == "Frozen"){
        			?>
	        			    <p>Frozen_Food</p>
	        			    <a href="frozen.php"><img src="img/frozen.png" alt="" width=210px height=170px></a>
					<?php
                        }
                        if($value == "Product3"){
        			?>
	        			<p>Ayurveda Elixirs</p>
						<a href="ayur3.php"><img src="img/ayur3.jpg" alt="" width=210px height=170px></a>
					<?php
                        }
                        if($value == "Product4"){
        			?>
	        			<p>Ayurveda Garden</p>
						<a href="ayur4.php"><img src="img/ayur4.jpg" alt="" width=210px height=170px></a>
					<?php
                        }
                        if($value == "Product5"){
        			?>
	        			<p>Yoga and health</p>
						<a href="ayur5.php"><img src="img/ayur5.jpeg" alt="" width=210px height=170px></a>
					<?php
                        }
                        if($value == "Product6"){
        			?>
	        			<p>Massages</p>
						<a href="ayur6.php"><img src="img/ayur6.jpeg" alt="" width=210px height=170px></a>
					<?php
						}
						if($value == "Product7"){
        			?>
        		    	<p>Check some healthy recipes here</p>
						<a href="ayur7.php"><img src="img/ayur7.jpeg" alt="" width=210px height=170px></a>
						
					<?php
						}
						if($value == "Product8"){
        			?>
        			    <p>Therapist</p>
						<a href="ayur8.php"><img src="img/ayur8.jpeg" alt="" width=210px height=170px></a>
					<?php
						}
						if($value == "Product9"){
        			?>
	        			<p>Wellness center</p>
						<a href="ayur9.php"><img src="img/ayur9.jpeg" alt="" width=210px height=170px></a>

					<?php
						}
						if($value == "Product10"){
        			?>
	        			<p>Special demands?</p>
						<a href="ayur10.php"><img src="img/ayur10.jpeg" alt="" width=210px height=170px></a>
						
					<?php
						}
						

                }
            }
		?>
								    <p></p></br>
								    <p>
								    <a href="#"><h5>Most/Top visited products :</h5></a></p>
								    	<?php
$mostVisitArray = Array(
    "product1Count" => 0,
    "product2Count" => 0,
    "product3Count" => 0,
    "product4Count" => 0,
	"product5Count" => 0,
	"product6Count" => 0,
    "product7Count" => 0,
    "product8Count" => 0,
    "product9Count" => 0,
	"product10Count" => 0,
	"flour" => 0,
	"frozen" => 0,
	"fruits" => 0,
	"vegetables" => 0,
	"sweets" => 0,
	"milkp" => 0,
	"grains" => 0,
	"cooker" => 0,
	"cooktop" => 0,
	"pan" => 0,
	"tin" => 0,
	"roti" => 0,
	"thali" => 0,
	"antiques" => 0,
	"grinder" => 0);
	
foreach ($mostVisitArray as $key => $value){
	if($key == 'product1Count'){
	    if(isset($_COOKIE['product1Visit']))
			$mostVisitArray['product1Count'] = $_COOKIE['product1Visit'];
	}
	if($key == 'product2Count'){
	    if(isset($_COOKIE['product2Visit']))
			$mostVisitArray['product2Count'] = $_COOKIE['product2Visit'];
	}
	if($key == 'product3Count'){
	    if(isset($_COOKIE['product3Visit']))
			$mostVisitArray['product3Count'] = $_COOKIE['product3Visit'];
	}
	if($key == 'product4Count'){
	    if(isset($_COOKIE['product4Visit']))
			$mostVisitArray['product4Count'] = $_COOKIE['product4Visit'];
	}
	if($key == 'product5Count'){
	    if(isset($_COOKIE['product5Visit']))
			$mostVisitArray['product5Count'] = $_COOKIE['product5Visit'];
	}
	if($key == 'product6Count'){
	    if(isset($_COOKIE['product6Visit']))
			$mostVisitArray['product6Count'] = $_COOKIE['product6Visit'];
	}
	if($key == 'product7Count'){
	    if(isset($_COOKIE['product7Visit']))
			$mostVisitArray['product7Count'] = $_COOKIE['product7Visit'];
	}
	if($key == 'product8Count'){
	    if(isset($_COOKIE['product8Visit']))
			$mostVisitArray['product8Count'] = $_COOKIE['product8Visit'];
	}
	if($key == 'product9Count'){
	    if(isset($_COOKIE['product9Visit']))
			$mostVisitArray['product9Count'] = $_COOKIE['product9Visit'];
	}
	if($key == 'product10Count'){
	    if(isset($_COOKIE['product10Visit']))
			$mostVisitArray['product10Count'] = $_COOKIE['product10Visit'];
	}
	if($key == 'flour'){
	    if(isset($_COOKIE['FlourVisit']))
			$mostVisitArray['FlourVisit'] = $_COOKIE['FlourVisit'];
	}
	if($key == 'frozen'){
	    if(isset($_COOKIE['FrozenVisit']))
			$mostVisitArray['FrozenVisit'] = $_COOKIE['FrozenVisit'];
	}
	if($key == 'fruits'){
	    if(isset($_COOKIE['FruitsVisit']))
			$mostVisitArray['FruitsVisit'] = $_COOKIE['FruitsVisit'];
	}
	if($key == 'sweets'){
	    if(isset($_COOKIE['SweetsVisit']))
			$mostVisitArray['SweetsVisit'] = $_COOKIE['SweetsVisit'];
	}
	if($key == 'vegetables'){
	    if(isset($_COOKIE['VegetablesVisit']))
			$mostVisitArray['VegetablesVisit'] = $_COOKIE['VegetablesVisit'];
	}
	if($key == 'milkp'){
	    if(isset($_COOKIE['MilkpVisit']))
			$mostVisitArray['MilkpVisit'] = $_COOKIE['MilkpVisit'];
	}
	if($key == 'grains'){
	    if(isset($_COOKIE['GrainsVisit']))
			$mostVisitArray['GrainsVisit'] = $_COOKIE['GrainsVisit'];
	}
	/*-----*/
	if($key == 'cooker'){
	    if(isset($_COOKIE['CookerVisit']))
			$mostVisitArray['cooker'] = $_COOKIE['CookerVisit'];
	}
	if($key == 'cooktop'){
	    if(isset($_COOKIE['CooktopVisit']))
			$mostVisitArray['cooktop'] = $_COOKIE['CooktopVisit'];
	}
	if($key == 'pan'){
	    if(isset($_COOKIE['PanVisit']))
			$mostVisitArray['pan'] = $_COOKIE['PanVisit'];
	}
	if($key == 'tin'){
	    if(isset($_COOKIE['TinVisit']))
			$mostVisitArray['tin'] = $_COOKIE['TinVisit'];
	}
	if($key == 'roti'){
	    if(isset($_COOKIE['RotiVisit']))
			$mostVisitArray['roti'] = $_COOKIE['RotiVisit'];
	}
	if($key == 'thali'){
	    if(isset($_COOKIE['ThaliVisit']))
			$mostVisitArray['thali'] = $_COOKIE['ThaliVisit'];
	}
	if($key == 'antiques'){
	    if(isset($_COOKIE['AntiquesVisit']))
			$mostVisitArray['antiques'] = $_COOKIE['AntiquesVisit'];
	}
	if($key == 'grinder'){
	    if(isset($_COOKIE['GrinderVisit']))
			$mostVisitArray['grinder'] = $_COOKIE['GrinderVisit'];
	}
}
arsort($mostVisitArray);
?>
<?php
		$check = 1;
		foreach ($mostVisitArray as $key => $value){
		    if($check <= 5){
				if($value != 0){ 
                 if($key == "product1Count"){
                     ?>
                	    <p>Spices</p>
	                	<a href="ayur1.php">
						<img class="let_hover" src="img/ayur1.jpeg" alt="" width=210px height=170px></a>
                    <?php
                     
                 }
                 if($key == "product2Count"){
                     ?>
                        <p>Essential Oils and Balms</p>
	        			<a href="ayur2.php"><img src="img/ayur2.jpg" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "product3Count"){
                     ?>
	        			<p>Ayurveda Elixirs</p>
						<a href="ayur3.php"><img src="img/ayur3.jpg" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "product4Count"){
                     ?>
                     	<p>Ayurveda garden</p>
						<a href="ayur4.php"><img src="img/ayur4.jpg" alt="" width=210px height=170px></a>
					
					<?php
                     
                 }
                 if($key == "product5Count"){
                     ?>
	        	        <p>Yoga and health</p>
						<a href="ayur5.php"><img src="img/ayur5.jpeg" alt="" width=210px height=170px></a>
						
					<?php
                     
                 }
                 if($key == "product6Count"){
                     ?>
                     	<p>Massages</p>
                        <a href="ayur6.php"><img src="img/ayur6.jpeg" alt="" width=210px height=170px></a>
					
					<?php
                     
                 }
                 if($key == "product7Count"){
                     ?>
	        	        <p>Recipe Books</p>
						<a href="ayur7.php"><img src="img/ayur7.jpeg" alt="" width=210px height=170px></a>
						
					<?php
                     
                 }
                 if($key == "product8Count"){
                     ?>
                        <p>Therapist</p>
						<a href="ayur8.php"><img src="img/ayur8.jpeg" alt="" width=210px height=170px></a>
						
					<?php
                     
                 }
                 if($key == "product9Count"){
                     ?>
	        		    <p>Wellness center</p>
						<a href="ayur9.php"><img src="img/ayur9.jpeg" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "FlourVisit"){
                     ?>
	        		    <p>Wellness center</p>
						<a href="flour.php"><img src="img/flour.jpg" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "FrozenVisit"){
                     ?>
	        		    <p>Wellness center</p>
						<a href="frozen.php"><img src="img/frozen.png" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "FruitsVisit"){
                     ?>
	        		    <p>Fruits</p>
						<a href="fruits.php"><img src="img/fruits.png" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "SweetsVisit"){
                     ?>
	        		    <p>Sweets</p>
						<a href="sweets.php"><img src="img/sweets.png" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "VegetablesVisit"){
                     ?>
	        		    <p>Vegetables</p>
						<a href="vegetables.php"><img src="img/vegetables.png" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "MilkpVisit"){
                     ?>
	        		    <p>Milk Products</p>
						<a href="milkp.php"><img src="img/milkp.jpg" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "GrainsVisit"){
                     ?>
	        		    <p>Grains</p>
						<a href="grains.php"><img src="img/grains.jpg" alt="" width=210px height=170px></a>
					<?php
                     
                 }
                 if($key == "product10Count"){
                     ?>
                        <p>Special demands</p>
						<a href="ayur10.php"><img src="img/ayur10.jpeg" alt="" width=210px height=170px></a>
						
					<?php
						}
						
						
						/*---kitchen---*/
				if($key == "cooker"){
                     ?>
                        <p>Special demands</p>
						<a href="cooker.php"><img src="img/cooker.jpg" alt="" width=210px height=170px></a>
						
					<?php
						}
						
				if($key == "cooktop"){
                     ?>
                        <p>Special demands</p>
						<a href="cooktop.php"><img src="img/cooktop.jpg" alt="" width=210px height=170px></a>
						
					<?php
						}
						
				if($key == "pan"){
                     ?>
                        <p>Special demands</p>
						<a href="pan.php"><img src="img/pan.jpg" alt="" width=210px height=170px></a>
						
					<?php
						}
				
				if($key == "tin"){
                     ?>
                        <p>Special demands</p>
						<a href="tins.php"><img src="img/tins.jpg" alt="" width=210px height=170px></a>
						
					<?php
						}
						
				if($key == "roti"){
                     ?>
                        <p>Special demands</p>
						<a href="roti.php"><img src="img/roti.jpg" alt="" width=210px height=170px></a>
						
					<?php
						}
						
				if($key == "thali"){
                     ?>
                        <p>Special demands</p>
						<a href="thali.php"><img src="img/thali.jpg" alt="" width=210px height=170px></a>
						
					<?php
						}
						
				if($key == "pan"){
                     ?>
                        <p>Special demands</p>
						<a href="pan.php"><img src="img/pan.jpg" alt="" width=210px height=170px></a>
						
					<?php
						}
						
				if($key == "antiques"){
                     ?>
                        <p>Special demands</p>
						<a href="antiques.php"><img src="img/antiques.jpg" alt="" width=210px height=170px></a>
						
					<?php
						}
				
				if($key == "grinder"){
                     ?>
                        <p>Special demands</p>
						<a href="grinder.php"><img src="img/grinder.jpg" alt="" width=210px height=170px></a>
						
					<?php
						}
						
						/*---kitchen---*/
						
						
					}

                }
				                
                ++$check;
            }
		?>
									</p>
								</div>
							
							</div>

					</div>
				</div>
			</section>
			<!-- End contact-page Area -->

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
