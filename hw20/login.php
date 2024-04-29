<?php
echo ' <!-- ==== GREYWRAP ==== -->';
echo '<div id="greywrap">';
echo '</div>';
echo '<!-- greywrap -->';
echo '<section id="home">';
echo '<h2>LOGIN: Please log in</h2>';
if(!isset($_POST["submit"])) {
	echo '<form method="post" action="">';
	echo '<div class="form-group" id="user-group">';
	echo '<label class="control-label" for="username">Create a username: </label>';
	echo '<input class="form-control" type="text" id="username" name="username"/>';
	echo '<div class="help-block" id="user-feedback"></div>';
	echo '</div>';
	echo '<div class="form-group" id="pass-group">';
	echo '<label class="control-label" for="password">Create a password: </label>';
	echo '<input class="form-control" type="password" id="password" name="password"/>';
	echo '<div class="help-block" id="pass-feedback"></div>';
	echo '</div>';
	echo '<div class="form-group">';
	echo '<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>';
	echo '</div>';
	echo '</form>';
}
if(isset($_POST["submit"])) {
	$username=addslashes($_POST['username']);
	$passText=$_POST['password'];
	$salt="CS4413SP24-01";
	$password=hash("sha256", $salt.$passText.$username);
	$dblink=db_connect("user_data");
	$sql="Select `auto_id` from `accounts` where `auth_hash`='$password'";
	$result=$dblink->query($sql) or
		die("<p>Something went wrong with $sql<br>".$dblink->error);
	if($result->num_rows<=0){
		redirect("index.php?page=login&errMsg=invalidAuth");
	}
	else {
		$salt=microtime();
		$sid=hash("sha256", $salt.$password);
		$sql="Update `accounts` set `session_id`='$sid' where `auth_hash`='$password'";
		$dblink->query($sql) or
			die("<p>Something went wrong with $sql<br>".$dblink->error);
		redirect("index.php?page=results&sid=$sid");
	}
}
echo '</section>';
?>