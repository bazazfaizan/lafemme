<?php
session_start();

require_once "lafemmeconfig.php";
error_reporting(0);

if ($_SESSION["loggedIn"] == true) {

	header("Location: ./users.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$loginEmail = $_POST['username'];
	
	$loginPassword = $_POST['password'];

	$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT uid FROM login where email = '" .  $loginEmail . "' and password = '" . $loginPassword . "'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

		$row = $result->fetch_assoc();
		$_SESSION['uid'] = $row['uid'];
		$_SESSION['loggedIn'] = true;

		header("Location: ./users.php");
	} else {

		echo "<script>alert('Invalid username or password :-) ')</script>";
	}

	$conn->close();
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
							<h3 class="mb-4 billing-heading">Login Here!</h3>
							<div class="row align-items-end">
								<div class="col-md-6">
									<div class="form-group">
										<label for="firstname">Username</label>
										<input required type="email" name="username" class="form-control" placeholder="">
									</div>
								</div>

							</div>
							<div class="row align-items-end">
								<div class="col-md-6">
									<div class="form-group">
										<label for="firstname">Password</label>
										<input  required type="password" name="password" class="form-control" placeholder="">
									</div>
								</div>

							</div>
							<button type="submit" class="btn btn-primary">Login</button>
							<label class="mr-3">Create an Account? <a href="register.php">register Here!</a> </label>
					</div>
					</form>

				</div>
			</div>
		</section>
		<br>

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