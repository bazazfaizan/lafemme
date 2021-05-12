<nav class="fh5co-nav" role="navigation">
	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-right">
					<p class="num">Call: +91 990 633 0779</p>
					<ul class="fh5co-social">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.php"><img src="images/logo.jpg" alt="image"></a></div>
					<!-- <div id="fh5co-logo"><a href="index.php">Lafemme<span>.</span></a></div> -->
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li ><a href="index.php">Home</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						

						<?php

						if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
							echo '<li><a href="users.php">users</a></li><li><a href="queries.php">queries</a></li><li><a href="logout.php">Logout</a></li>';
						} else {
							echo '<li><a href="register.php">become a member</a></li><li><a href="about.php">About Us</a></li><li><a href="contact.php">Contact Us</a></li><li><a href="login.php">login</a></li>';
						}

						?>
						
					</ul>
				</div>
			</div>

		</div>
	</div>
</nav>
