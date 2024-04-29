<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Hans' webpage!</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="assets/css/icomoon.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	
	<!-- Main Stylesheet File -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
	Template Name: Dot
	Template URL: https://templatemag.com/dot-bootstrap-agency-template/
	Author: TemplateMag.com
	License: https://templatemag.com/license/
	======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">

	<div id="navbar-main">
		<!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-radio-checked" style="font-size:30px; color:#1abc9c;"></span>
					</button>
					<a class="navbar-brand hidden-xs hidden-sm smoothscroll" href="#home"><span class="icon icon-radio-checked" style="font-size:18px; color:#1abc9c;"></span></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php?page=home" class="smoothscroll">Home</a></li>
						<li> <a href="index.php?page=school" class="smoothscroll"> School</a></li>
						<li> <a href="index.php?page=hobbies" class="smoothscroll"> Hobbies</a></li>
						<li> <a href="index.php?page=job" class="smoothscroll"> Job</a></li>
						<li> <a href="index.php?page=movies" class="smoothscroll"> Movies</a></li>
            			<li> <a href="index.php?page=contact" class="smoothscroll"> Contact</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<?php
		if(!isset($_GET['page']))
			$page = "home";
		else
			$page = $_GET['page'];
		switch($page) {
			case "home":
				include("home.php");
				break;
			case "school":
				include("school.php");
				break;
			case "hobbies":
				include("hobbies.php");
				break;
			case "job":
				include("job.php");
				break;
			case "movies":
				include("movies.php");
				break;
			case "contact":
				include("contact.php");
				break;
			default:
				include("home.php");
				break;
		}
	?>
	<!--Copyright-->
	<div id="copyrights">
		<div class="container">
			<p>
				&copy; Copyrights <strong>Dot</strong>. All Rights Reserved
			</p>
			<div class="credits">
				<!--
				You are NOT allowed to delete the credit link to TemplateMag with free version.
				You can delete the credit link only if you bought the pro version.
				Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dot-bootstrap-agency-template/
				Licensing information: https://templatemag.com/license
				-->
				Created with Dot template by <a href="https://templatemag.com/">TemplateMag</a>
			</div>
			<p><a href="index.html">Back to home</a></p>
		</div>
	</div>

	<!-- JavaScript Libraries -->
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="lib/php-mail-form/validate.js"></script>
	<script src="lib/easing/easing.min.js"></script>

	<!-- Template Main Javascript File -->
	<script src="js/main.js"></script>
	
	<script src="assets/js/add-content.js"></script>
</body>
</html>