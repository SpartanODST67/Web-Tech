<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Results</title>
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
            	<li><a href="index.html" class="smoothscroll">Home</a></li>
            	<li> <a href="school.html" class="smoothscroll"> School</a></li>
            	<li> <a href="hobbies.html" class="smoothscroll"> Hobbies</a></li>
            	<li> <a href="job.html" class="smoothscroll"> Job</a></li>
            	<li> <a href="movies.html" class="smoothscroll"> Movies</a></li>
            	<li> <a href="contact.html" class="smoothscroll"> Contact</a></li>
			</ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- ==== GREYWRAP ==== -->
  <div id="greywrap">
  </div>
  <!-- greywrap -->


  <div class="container" id="contact" name="contact">
    <div class="row">
      <br>
      <h1 class="centered">THANKS FOR VISITING ME</h1>
      <hr>
      <br>
      <br>
		
      <div class="col-lg-5">
        <h3>Contact Information</h3>
        <p><span class="icon icon-home"></span> 1500 N Greenville Ave, Richardson, TX 75081<br/>
          <span class="icon icon-phone"></span> +555 6027 <br/>
          <span class="icon icon-mobile"></span> +555 6027 <br/>
          <span class="icon icon-envelop"></span> <a href="mailto:hans.landgrebe@my.utsa.edu"> hans.landgrebe@my.utsa.edu</a> <br/>
          <span class="icon icon-twitter"></span> <a href="#"> @itscalledtwitternotx </a> <br/>
          <span class="icon icon-facebook"></span> <a href="#"> metaisfacebook </a> <br/>
        </p>
      </div>
      <!-- col -->

      <div class="col-lg-7">
        <h3>Results</h3>
		<?php
		  if(isset($_GET['submit'])) {
			  echo '<p>First Name: '.$_GET['first-name'].'<p>';
			  echo '<p>Last Name: '.$_GET['last-name'].'<p>';
			  echo '<p>Email: '.$_GET['email'].'<p>';
			  echo '<p>Phone Number: '.$_GET['phone-number'].'<p>';
			  echo '<p>Username: '.$_GET['username'].'<p>';
			  echo '<p>Password: '.$_GET['password'].'<p>';
			  echo '<p>Comments: '.$_GET['comments'].'<p>';
		  }
		  else {
			  echo '<h2>Please return to contact.html to fill out the form!</h2>';
		  }
		  ?>
      </div>
      <!-- col -->

    </div>
    <!-- row -->

  </div>
  <!-- container -->

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
          Licensing information: https://templatemag.com/license/
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
	
  <script src="assets/js/event-attributes.js"></script>

</body>
</html>
