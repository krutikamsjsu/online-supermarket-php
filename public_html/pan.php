<?php
include("conection.php");
    $trace = [];
    if(isset($_COOKIE['activity_cookie'])){
        $trace = unserialize($_COOKIE["activity_cookie"]);
    }
    array_push($trace, "Pan");    
    $rating = 0;
    $review = "";
    if(isset($_POST['rating']) && $_POST['rating']>0){
        $rating = $_POST['rating'];
        $review = $_POST['message'];
        if(isset($_COOKIE['user_cookie'])){
            $email = unserialize($_COOKIE["user_cookie"])["email"];
            $sql="INSERT INTO rating (email, item, rating, review) VALUES ('$email','Pan',$rating,'$review')";
        }
        if (!mysql_query($sql,$con))
          {
          die('Error: ' . mysql_error());
          }
    }
    $reviewArray = [];
    if(isset($_COOKIE['user_cookie'])){
        $email = unserialize($_COOKIE["user_cookie"])["email"];
        
        /*SELECT u.first_name, r.email, r.rating, r.review FROM `rating` r, `user` u WHERE r.email = u.email and r.email = 'krutika.mude@gmail.com' AND item = 'Pan'*/
        
        $query="SELECT u.first_name, r.email, r.rating, r.review FROM rating r, user u WHERE r.email=u.email AND item = 'Pan'" ;
        $result=mysql_query($query);
        if(mysql_num_rows($result)){
             while($row = mysql_fetch_array($result))
 	                {
 	                    $ratingDetails = $row;
 	                    if($email == $row[1]){
 	                        $rating = (int)$row[2];
 	                    }
 	                    if(strlen($row[3])>=1){
 	                        $reviewArray[$row[0]] = $row[3];
 	                    }
 	                }
          }
          else{
              $rating = 0;
          }
        }
    $product = [];
    if(isset($_COOKIE['Product_cookie'])){
        $product = unserialize($_COOKIE["Product_cookie"]);
        if(in_array("Pan",$product)){
            $index = array_search("Pan", $product);
            array_splice($product, $index, 1);
        }else{
            if(sizeof($product)==5){
                array_shift($product);
            }
        }
    }
    function addToCart(){
        $cart = [];
        if(isset($_COOKIE['AddToCart_cookie'])){
            $cart = unserialize($_COOKIE["AddToCart_cookie"]);
        }
        array_push($cart, "Pan");   
        setcookie("AddToCart_cookie",serialize($cart),time()+60*60*24*5);
    }
    array_push($product, "Pan");
    setcookie("Product_cookie",serialize($product),time()+60*60*24*5);
    setcookie('PanVisit', isset($_COOKIE['PanVisit']) ? ++$_COOKIE['PanVisit'] : 1,time()+60*60*24*5);
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
		<title>Pans</title>

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
			
			
		.star-ratings {
			unicode-bidi: bidi-override;
			color: #c5c5c5;
			font-size: 50px;
			height: 50px;
			width: 250px;
			margin: 1em auto;
			position: relative;
			padding: 0;
		}
		.star-ratings-bottom { z-index: 0; }	
		.star-ratings-top {
			color: gold;
			padding: 0;
			position: absolute;
			z-index: 1;
			display:block;
			left: 0px;
			overflow: hidden;
		}	
		.rating {
			float:left;
		}

		/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
		   follow these rules. Every browser that supports :checked also supports :not(), so
		   it doesn’t make the test unnecessarily selective */
		.rating:not(:checked) > input {
			position:absolute;
			// top:-9999px;
			clip:rect(0,0,0,0);
		}

		.rating:not(:checked) > label {
			float:right;
			width:1em;
			padding:0 .1em;
			overflow:hidden;
			white-space:nowrap;
			cursor:pointer;
			font-size:200%;
			line-height:1.2;
			color:#ddd;
			text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
		}

		.rating:not(:checked) > label:before {
			content: '★ ';
		}

		.rating > input:checked ~ label {
			color: #f70;
			text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
		}

		.rating:not(:checked) > label:hover,
		.rating:not(:checked) > label:hover ~ label {
			color: gold;
			text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
		}

		.rating > input:checked + label:hover,
		.rating > input:checked + label:hover ~ label,
		.rating > input:checked ~ label:hover,
		.rating > input:checked ~ label:hover ~ label,
		.rating > label:hover ~ input:checked ~ label {
			color: #ea0;
			text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
		}

		.rating > label:active {
			position:relative;
			top:2px;
			left:2px;
		}
		label, legend {
			padding: 0;
			border: 0;
			font-weight: 700;
			font-size: 17px;
		}
		p {
			margin-bottom: 0px;
		}
	
			
			.ml-15{
			    margin-left:-15px;
			}
			.checked {
    color: orange;
}</style>
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
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-3 col-md-offset-5 container-fluid home-about-left no-padding" style="margin-top: -140px;">
							<img class="mx-auto d-block img-fluid" src="img/pan.jpg" alt="">
						</div>
						<div class="col-lg-6 home-about-right no-padding">
							<h1>Pans</h1>
							<h5>
							Make your pan cakes tasty
							</h5>
							<p>
								Tawas,pans,kadai and many more..
							</p>
							<a class="primary-btn text-uppercase" href="cart_working.php" value="pan" onclick="addToCart();">Add to Cart</a>
							<form id="myForm" action="pan.php" method="post" class="form-area contact-form text-right">
										<div class="col-lg-6 form-group" style="float:left; margin-top:20px;">
											<p style="float:left" class="ml-15">Add stars for rating</p>
											
                                        </div>
                                        <div class="col-md-8 form-group">
                                        <fieldset class="rating" style="margin-left:-20px;"
                                            <?php 
                                                if(isset($_COOKIE['user_cookie'])){
                                            			//$email = unserialize($_COOKIE["user_cookie"])["email"];
                                            			echo 'onclick="this.form.submit();"';
                                            	}else{
                                                     echo "><p>Please Login to give rating.</p>";
                                                } 
                                            ?>
            								<input type="radio" id="star5" name="rating" value="5" class=""><label for="star5" title="Rocks!" <?php if($rating === 5) echo 'checked="checked"';?> class="">5 stars</label>
            								<input type="radio" id="star4" name="rating" value="4" <?php if($rating === 4) echo 'checked="checked"';?> class=""><label for="star4" title="Pretty good" class="">4 stars</label>
            								<input type="radio" id="star3" name="rating" value="3" <?php if($rating === 3) echo 'checked="checked"';?> class=""><label for="star3" title="Meh" class="">3 stars</label>
            								<input type="radio" id="star2" name="rating" value="2" <?php if($rating === 2) echo 'checked="checked"';?> class=""><label for="star2" title="Kinda bad" class="">2 stars</label>
            								<input type="radio" id="star1" name="rating" value="1" <?php if($rating === 1) echo 'checked="checked"';?> class=""><label for="star1" title="Sucks big time" class="">1 star</label>
            							</fieldset>
                                        </div>
										<div class="form-group" style="margin-top:20px;">
											<textarea class="common-textarea form-control" name="message" placeholder="Comment" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Comment'" required=""></textarea>
										</div>
										<div>
										    <input type="submit" name="Submit" style="float:left;" onclick="this.form.submit();" class="primary-btn text-uppercase">
										</div>
								</form>
						</div>
					</div>
					<div class="col-lg-6 home-about-right no-padding">
                            <h1>User Comments</h1>
                            <div style="margin-left:20px;">
                                <?php
                                foreach ($reviewArray as $key => $value){
                                    print("<h3>".$key."</h3>");
                                    print("<label style='font-style:italic;'>- '".$value."'</label>");
                                }
                                ?>
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
