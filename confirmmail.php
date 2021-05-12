<?php
session_start();

require_once "lafemmeconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $actual = $_POST['otp'];
    $expected = $_SESSION['otp'];

    if ($actual == $expected) {

        $fname = $_SESSION['fname'];
        $lname = $_SESSION['lname'];
        $gender = $_SESSION['gender'];
        $address = $_SESSION['address'];
        $contact = $_SESSION['contact'];
        $email = $_SESSION['email'];

        $sql = "INSERT INTO register (fname, lname, gender, address, contact, email) VALUES ('$fname','$lname','$gender','$address','$contact','$email')";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

        if (!$conn) {

            echo '<script> alert("connection failed, please try again later"); window.location.href="./index.php"; </script>';
            die();

        }

        if (!mysqli_query($conn, $sql)) {
            echo '<script> alert("something went wrong, please try again later"); window.location.href="./index.php"; </script>';
            die();
        }else {

            echo '<script> alert("we have received your registration details, we will get back to you soon"); window.location.href="./index.php"; </script>';
            
        }
        
    } else {

        echo "<script>alert('Invalid OTP, please try again');</script>";
    }
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
                            <h3 class="mb-4 billing-heading">Enter OTP sent to you </h3>

                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="otp">Enter your OTP</label>
                                        <input  required type="number" name="otp" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <br>
                                <div class="w-100"></div>
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary">Confirm Account</button>
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