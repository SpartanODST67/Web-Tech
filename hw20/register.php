<?php
echo ' <!-- ==== GREYWRAP ==== -->';
echo '<div id="greywrap">';
echo '</div>';
echo '<!-- greywrap -->';
echo '<section id="home">';
echo '<h2>REGISTER: Please fill out the form below</h2>';
if(!isset($_POST["submit"])) {
	echo '<form method="post" action="">';
	
	//Account Related Success Message
	if(isset($_GET['sucMsg'])) {
		echo '<div class="form-group has-success" id="account-feedback-group">';
		if(strstr($_GET['sucMsg'], "accountExists"))
			echo '<div class="help-block" id="account-feedback">Success</div>';
		echo '</div>';
	}
	
	//Account Related Error Message
	if(isset($_GET['errMsg'])) {
		echo '<div class="form-group has-error" id="account-feedback-group">';
		if(strstr($_GET['errMsg'], "accountExists"))
			echo '<div class="help-block" id="account-feedback">This account already exists. Please login instead.</div>';
		echo '</div>';
	}
	
	//Username
	if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"usernameNull")) { //Null Error
		echo '<div class="form-group has-error" id="user-group">';
		echo '<label class="control-label" for="username">Create a username: </label>';
		echo '<input class="form-control" type="text" id="username" name="username"/>';
		echo '<div class="help-block" id="user-feedback">USERNAME cannot be blank.</div>';
		echo '</div>';
	}
	else if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"usernameShort")) { //Too Short Error
		echo '<div class="form-group has-error" id="user-group">';
		echo '<label class="control-label" for="username">Create a username: </label>';
		echo '<input class="form-control" type="text" id="username" name="username"/>';
		echo '<div class="help-block" id="user-feedback">USERNAME must be 6 characters or more.</div>';
		echo '</div>';
	}
	else { //No Error
		if(isset($_SESSION['username'])) { //Username has data
		echo '<div class="form-group has-success" id="user-group">';
		echo '<label class="control-label" for="username">Create a username: </label>';
		echo '<input class="form-control" type="text" id="username" name="username" value="'.$_SESSION['username'].'"/>';
		echo '<div class="help-block" id="user-feedback"></div>';
		echo '</div>';
		}
		else { //Default
			echo '<div class="form-group" id="user-group">';
			echo '<label class="control-label" for="username">Create a username: </label>';
			echo '<input class="form-control" type="text" id="username" name="username"/>';
			echo '<div class="help-block" id="user-feedback"></div>';
			echo '</div>';
		}
	}
	
	//Password
	if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"passwordNull")) { //Null Error
		echo '<div class="form-group has-error" id="pass-group">';
		echo '<label class="control-label" for="password">Create a password: </label>';
		echo '<input class="form-control" type="password" id="password" name="password"/>';
		echo '<div class="help-block" id="pass-feedback">PASSWORD cannot be blank.</div>';
		echo '</div>';
	}
	else if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"passwordShort")) { //Too Short Error
		echo '<div class="form-group has-error" id="pass-group">';
		echo '<label class="control-label" for="password">Create a password: </label>';
		echo '<input class="form-control" type="password" id="password" name="password"/>';
		echo '<div class="help-block" id="pass-feedback">PASSWORD must be 6 characters or more.</div>';
		echo '</div>';
	}
	else { //No Error
		if(isset($_SESSION['password'])) { //Password has data
			echo '<div class="form-group has-success" id="pass-group">';
			echo '<label class="control-label" for="password">Create a password: </label>';
			echo '<input class="form-control" type="password" id="password" name="password" value="'.$_SESSION['password'].'"/>';
			echo '<div class="help-block" id="pass-feedback"></div>';
			echo '</div>';
		}
		else { //Default
			echo '<div class="form-group" id="pass-group">';
			echo '<label class="control-label" for="password">Create a password: </label>';
			echo '<input class="form-control" type="password" id="password" name="password"/>';
			echo '<div class="help-block" id="pass-feedback"></div>';
			echo '</div>';
		}
	}
	
	echo '<div class="form-group">';
	echo '<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>';
	echo '</div>';
	echo '</form>';
}
if(isset($_POST["submit"])) {
	//Errors in Input Fields
	$errors="";
	//Username
	$username=$_POST['username'];
	if($username==NULL) //Empty Field
		$errors.="usernameNull";
	else if(strlen($username) < 6) //Username is too short
		$errors.="usernameShort";
	else //No Error
		$_SESSION['username']=$username;
				
	//Password
	$password=$_POST['password'];
	if($password==NULL) //Empty Field
		$errors.="passwordNull";
	else if(strlen($password) < 6) //Password is too short
		$errors.="passwordShort";
	else //No Error
		$_SESSION['password']=$password;
	
	if($errors != NULL)
		redirect("index.php?page=register&errMsg=$errors");
	
	//No Errors in Input Fields
	$username=addslashes($_POST['username']);
	$passText=$_POST['password'];
	$salt="CS4413SP24-01";
	$password=hash("sha256", $salt.$passText.$username);
	$dblink=db_connect("user_data");
	$sql="Select `auto_id` from `accounts` where `username`='$username'";
	$result=$dblink->query($sql) or
		die("<p>Something went wrong with $sql<br>".$dblink->error);
	if($result->num_rows > 0)
		redirect("index.php?page=register&errMsg=accountExists");
	else {
		$sql="Insert into `accounts` (`username`,`auth_hash`) values ('$username','$password')";
		$dblink->query($sql) or
			die("<p>Something went wrong with $sql<br>".$dblink->error);
		redirect("index.php?page=login&sucMsg=accountCreated");
	}
}
echo '</section>';
?>
<script src="assets/js/event-attributes.js"></script>