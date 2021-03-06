<!-- Author: David Saul Rodriguez <david@enyutech.io>
Copyright (c) 2019 David S Rodriguez <david@enyutech.io>, All Rights Reserved.
Copyright (c) 2019 Enyutech.io, All Rights Reserved.
Copyright (c) 2019 Ivorleaf, LLC. All Rights Reserved. -->
<?php
if (isset($_POST['submit'])) {
	$to = 'info@ivorleaf.com';
	$from = 'www-data@ivorleaf.com';
	$replyto = filter_input(INPUT_POST, 'sender'); // The sender's email address
	$first_name = filter_input(INPUT_POST, 'first-name'); // The sender's first name
	$last_name = filter_input(INPUT_POST, 'last-name'); // The sender's last name
	$subject = filter_input(INPUT_POST, 'subject'); // Subject of the message.
	$message = $first_name ." ". $last_name ." wrote the following:". "\n\n" . filter_input(INPUT_POST, 'message'); // Contents of the message.

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: ". $from ."\r\n";
	$headers .= "Reply-To:". $replyto ."\r\n";

	mail($to,$subject,$message,$headers);
	header('Location: thank_you.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ivorleaf - Your books, online, all the time.</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<!-- socialcolor css -->
		<link rel="stylesheet" href="/css/socialColor.css">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
		<!-- font awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- custom css -->
		<link rel="stylesheet" href="css/templatemo-style.css">

	</head>
	<body>
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
  	</div>
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="." class="navbar-brand"><span><img src="images/logo.png" height="48px" width="48px" alt=""></span>Ivorleaf</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="https://ivorleaf.com/#home">Home</a></li>
						<li><a href="https://ivorleaf.com/#feature">Features</a></li>
						<li><a href="https://ivorleaf.com/#pricing">Pricing</a></li>
						<li><a href="https://ivorleaf.com/#download">Open Source</a></li>
						<li><a href="https://ivorleaf.com/#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">Your books, online, all the time.</h1>
							<p class="tm-white">Ivorleaf is making college textbooks more accessible to students in an eco-friendly way!</p>
							<!-- <img src="images/logo.png" class="img-responsive" alt="home img"> -->
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->

		<!-- start feature -->
		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">A Dedicated Library</h2>
						<p class="lead">Ivorleaf has a library dedicated to course specific material. Used by CSCU schools such as Housatonic and Gateway Community College, these books are designed by professors, specifically for their courses.</p>
						<p><span><i class="fa fa-mobile" aria-hidden="true"></i></span> Designed with the latest devices and technology in mind so that you can read and study anywhere.</p>
						<p><span><i class="fa fa-code" aria-hidden="true"></i></span> Ivorleaf books are Open Sourced and licensed under a <a href="https://creativecommons.org/" target="_blank">Creative Commons</a> licnese.</p>
						<p><span><i class="fa fa-share-alt"  aria-hidden="true"></i></span> We encourage professors to itterate and improve on the works here as well as add their own.</p>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="images/About_Writing; A_Guide_square.jpg" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>
		<!-- end feature -->

		<!-- start feature1 -->
		<section id="feature1">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<img src="images/Intermediate_Algebra.jpg" class="img-responsive" alt="feature img">
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="text-uppercase">Interactive Learning</h2>
						<p class="lead">When it comes to studying and learning, we understand that it is best done in an interactive way. You can read all you want, but you don't truly know something until you give it a go for yourself!</p>
						<p><span><i class="fa fa-tasks" aria-hidden="true"></i></span> Set goals, create and check off tasks with our interactive learning materials to help improve your learning skills.</p>
						<p><span><i class="fa fa-sign-language" aria-hidden="true"></i></span> Get hands on when it comes to studying. Highlight, annotate, write down your answers, and even solve math problems.</p>
						<p><span><i class="fa fa-sitemap" aria-hidden="true"></i></span> Network with your classmates and other students on our platform. Create study groups and help each other out!</p>
					</div>
				</div>
			</div>
		</section>
		<!-- end feature1 -->

		<!-- start pricing -->
		<section id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounceIn">
						<h2 class="text-uppercase">Our Pricing</h2>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4>Single Semester</h4>
								<p>$54.<sup>99</sup></p>
								<small class="text-lowercase">(4 Months of Access)</small>
							</div>
							<ul>
								<li>Unlimited Library Access</li>
								<li>1GB Cloud Storage</li>
								<li>Save $5 over 4 months </li>
							</ul>
							<button class="btn btn-primary text-uppercase">Coming Soon</button>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing active text-uppercase">
							<div class="pricing-title">
								<h4>Annual Plan</h4>
								<p>$149.<sup>99</sup></p>
								<small class="text-lowercase">($12.50 Monthly)</small>
							</div>
							<ul>
								<li>Unlimited Library Access</li>
								<li>5GB Cloud Storage</li>
								<li>Save $30 Annually</li>
							</ul>
							<button class="btn btn-primary text-uppercase">Coming Soon</button>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4>Monthly Plan</h4>
								<p>$14.<sup>99</sup></p>
								<small class="text-lowercase">($180 total annual cost)</small>
							</div>
							<ul>
								<li>Unlimited Library Access</li>
								<li>1GB Cloud Storage</li>
								<li>On Break? Press pause.</li>
							</ul>
							<button class="btn btn-primary text-uppercase">Coming Soon</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end pricing -->

		<!-- start download -->
		<section id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">We <i class="fas fa-heart" style="color:red;"></i> Open Source</h2>
						<p class="lead">Ivorleaf uses technology that is completely free and open source and we love to give back to those open source communities. For that reason, we make as much of
						our software stack available to you as we can. You can thank our CTO for that.</p>
						<a href="https://github.com/ivorleaf/" target="_blank" class="btn btn-primary text-uppercase"><i class="fab fa-github"></i> Our GitHub</a>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<!-- <img src="images/software-img.png" class="img-responsive" alt="feature img"> -->
						<img src="images/logo.png" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>
		<!-- end download -->

		<!-- start contact -->
		<section id="contact">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<h2 class="text-uppercase">Contact Us</h2>
							<p>We want to hear from you! If you have any questions, comments, concerns or suggestions, please contact us and we will get back to you with two (2) business days.</p>
							<address>
								<p><i class="fa fa-map-marker"></i> 900 Lafayette Blvd, Bridgeport, CT 06604, United States</p>
								<p><i class="fa fa-phone"></i> +1 (203) 450-6531</p>
								<p><i class="fa fa-envelope"></i> info@ivorleaf.com</p>
							</address>
						</div>
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<div class="contact-form">
								<form action="index.php" method="post">
									<div class="col-md-6">
										<input type="text" class="form-control" name="first-name" placeholder="First name" required>
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" name="last-name" placeholder="Last name" required>
									</div>
									<div class="col-md-12">
										<input type="email" class="form-control" name="sender" placeholder="Email" required>
									</div>
									<div class="col-md-12">
										<input type="text" class="form-control" name="subject" placeholder="Subject" required>
									</div>
									<div class="col-md-12">
										<textarea class="form-control" placeholder="Message" name="message" rows="4" required></textarea>
									</div>
									<div class="col-md-12">
										<input type="submit" class="form-control text-uppercase" value="Send" name="submit">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end contact -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col">
						<p>Copyright &copy; 2019 Ivorleaf, LLC. | Made with <i class="fas fa-heart" style="color:red;"></i> by <a href="https://gitlab.com/davidsrodriguez">David</a> of <a href="http://enyutech.io/">Enyutech</a></p>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
