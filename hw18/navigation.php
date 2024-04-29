<?php
	echo '<div id="navbar-main">';
	echo '<!-- Fixed navbar -->';
	echo '<div class="navbar navbar-default navbar-fixed-top">';
	echo '<div class="container">';
	echo '<div class="navbar-header">';
	echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
	echo '<span class="icon icon-radio-checked" style="font-size:30px; color:#1abc9c;"></span>';
	echo '</button>';
	echo '<a class="navbar-brand hidden-xs hidden-sm smoothscroll" href="#home"><span class="icon icon-radio-checked" style="font-size:18px; color:#1abc9c;"></span></a>';
	echo '</div>';
	echo '<div class="navbar-collapse collapse">';
	echo '<ul class="nav navbar-nav">';
	
	/*Navigation choices*/
	if(!isset($_GET["page"]))
		$page="home";
	else
		$page=$_GET['page'];

	//Home
	if($page == "home")
		echo '<li class="active"><a href="index.php?page=home" class="smoothscroll">Home</a></li>';
	else
		echo '<li><a href="index.php?page=home" class="smoothscroll">Home</a></li>';
	
	//School
	if($page == "school")
		echo '<li class="active"> <a href="index.php?page=school" class="smoothscroll"> School</a></li>';
	else
		echo '<li> <a href="index.php?page=school" class="smoothscroll"> School</a></li>';

	//Hobbies
	if($page == "hobbies")
		echo '<li class="active"> <a href="index.php?page=hobbies" class="smoothscroll"> Hobbies</a></li>';
	else
		echo '<li> <a href="index.php?page=hobbies" class="smoothscroll"> Hobbies</a></li>';

	//Job
	if($page == "job")
		echo '<li class="active"> <a href="index.php?page=job" class="smoothscroll"> Job</a></li>';
	else
		echo '<li> <a href="index.php?page=job" class="smoothscroll"> Job</a></li>';

	//Movies
	if($page == "movies")
		echo '<li class="active"> <a href="index.php?page=movies" class="smoothscroll"> Movies</a></li>';
	else
		echo '<li> <a href="index.php?page=movies" class="smoothscroll"> Movies</a></li>';
	
	//Contact
	if($page == "contact")
		echo '<li class="active"> <a href="index.php?page=contact" class="smoothscroll"> Contact</a></li>';
	else
		echo '<li> <a href="index.php?page=contact" class="smoothscroll"> Contact</a></li>';

	//Results
	if($page == "results")
		echo '<li class="active"><a href="index.php?page=results" class="smoothscroll"> Results</a></li>';
	else
		echo '<li><a href="index.php?page=results" class="smoothscroll"> Results</a></li>';

	echo '</ul>';
	echo '</div>';
	echo '<!--/.nav-collapse -->';
	echo '</div>';
	echo '</div>';
	echo '</div>';

?>