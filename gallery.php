<?php
session_start();
error_reporting(0);

?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lafemme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<link rel="shortcut icon" href="images/4.png">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<?php include('masterNav.inc.php');?>


		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Gallery</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<div id="fh5co-gallery">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2>Gym gallery</h2>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gal-1.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>10 in 1 A</h2>
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gal-2.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Spin Bike</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gal-4.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Battle Rope</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gal-3.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Running Treaddmill </h2>
									</div>
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>


		<?php include('masterFooter.inc.php'); ?>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>