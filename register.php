<?php
session_start();
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once "lafemmeconfig.php";
require_once "emailConfig.php";

$_SESSION['myMail'] = $myMail;
$_SESSION['myPassword'] = $myPassword;

function sendMail($receiver, $otp){

	$sender = $_SESSION['myMail'];
	$senderPassword = $_SESSION['myPassword'];
	$fname = $_SESSION['fname'];

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Port = 465; // or 587

	$mail->Host = "smtp.gmail.com";
	$mail->IsHTML(true);
	$mail->Username = $sender;
	$mail->Password = $senderPassword;
	$mail->SetFrom($sender);
	$mail->Subject = "OTP from La Femme";
	$mail->Body = "Hi, $fName your One time password(OTP) is <b> $otp </b> <br> OTP is confidential, please don't share it with anyone";
	$mail->AddAddress($receiver);

	if (!$mail->Send()) {

		echo '<script>alert("Mailer Error: ' . $mail->ErrorInfo . '")<script>';
		
	} else {
		
		header("Location: ./confirmmail.php");
		exit;
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$_SESSION['fname'] = $_POST['fname'];
	$_SESSION['lname'] = $_POST['lname'];
	$_SESSION['gender'] = $_POST['gender'];
	$_SESSION['address'] = $_POST['address'];
	$_SESSION['contact'] = $_POST['contact'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['otp'] = rand(111111, 999999);

	sendMail($_SESSION['email'], $_SESSION['otp']);
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

		<hr>


		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 col-md-push-1 animate-box">
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
							<h3 class="mb-4 billing-heading">Register Here</h3>
							<div class="row align-items-end">
								<div class="col-md-6">
									<div class="form-group">
										<label for="firstname">First Name</label>
										<input  required type="text" name="fname" class="form-control" placeholder="">
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<label for="lastname">Last Name</label>
										<input  required type="text" name="lname" class="form-control" placeholder="">
									</div>
								</div>

								
								<div class="col-md-6">
									<div class="form-group">
										<label for="firstname">Choose Gender</label>
										<select name="gender" id="gender" class="form-control" >
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>




								<div class="col-md-6">
									<div class="form-group">
										<label for="streetaddress">Address</label>
										<input  required type="text" name="address" class="form-control" placeholder="">
									</div>
								</div>


								<div class="w-100">
									<div class="col-md-6">
										<div class="form-group">
											<label for="phone">Phone</label>
											<input  required type="number" name="contact" class="form-control" placeholder="">
										</div>
									</div>
								</div>

								<div class="w-100">
									<div class="col-md-6">
										<div class="form-group">
											<label for="emailaddress">Email Address</label>
											<input  required type="email" name="email" class="form-control" placeholder="">
										</div>
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-12">
									<div class="form-group mt-4">

										<button type="submit" class="btn btn-primary">Register</button>
										<label class="mr-3">Already have an account<a href="login.php"> Login</a> </label>
									</div>
								</div>
							</div>
						</form><!-- END -->

					</div>
				</div>
		</section> <!-- .section -->



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