<?php
session_start();

require_once "lafemmeconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['msg'];

	$sql = "INSERT INTO contact (fname, lname, email, subject, msg) VALUES ('$fname','$lname','$email','$subject','$msg')";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	if (!$conn) {
		echo "<script>alert('connection failed, please try again later');</script>";
		die("Connection failed: " . mysqli_connect_error());
		header("Location: ./index.php");
	}

	if (!mysqli_query($conn, $sql)) {
		echo '<script> alert("something went wrong, please try again later"); window.location.href="./index.php"; </script>';
	}

	echo '<script> alert("Thanks for contacting us, you will soon hear from us"); window.location.href="./index.php"; </script>';
}
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

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img-4.jpg);" data-stellar-background-ratio="0.5">
	
	</header>
	<div id="map" class="fh5co-map"></div>
		<!-- END map -->
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<figure class="">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6611.982603823729!2d74.78900227597147!3d34.044094222432385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e18fcd9d678941%3A0x12915844c22aac3a!2sGul%20Berg%20Colony%2C%20Srinagar!5e0!3m2!1sen!2sin!4v1620116966554!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</figure>
						<ul>
							<li class="address"><a >Sector - 1, <br> Near J&K Bank ATM, <br> Gulbery Colony, Hyderpora</a></li>
							<li class="phone"><a href="tel://+91 990 633 0779">+91 990 633 0779</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@lafemme.co.in</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>News Letter</h3>
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input  required type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input  required type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input  required type="text" id="email" name="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input  required type="text" id="subject"  name="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="msg" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input  required type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>	
				</div>
			</div>
			
		</div>
	</div>

	<?php include('masterFooter.inc.php');?>
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
