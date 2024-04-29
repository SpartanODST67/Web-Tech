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
		  <?php
		  	session_start();
		  	if(!isset($_POST["submit"])) 
			{
				echo '<h3>Contact Form</h3>';
				echo '<form method="post" action="">';
				
				//First Name
				if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"firstNameNull")) { //Null Error
					echo '<div class="form-group has-error" id="fn-group">';
					echo '<label class="control-label" for="first-name">First Name: </label>';
					echo '<input class="form-control" type="text" id="first-name" name="first-name"/>';
					echo '<div class="help-block" id="fn-feedback">FIRST-NAME cannot be blank.</div>';
					echo '</div>';
				}
				else if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"firstNameShort")){ //Too Short Error
					echo '<div class="form-group has-error" id="fn-group">';
					echo '<label class="control-label" for="first-name">First Name: </label>';
					echo '<input class="form-control" type="text" id="first-name" name="first-name"/>';
					echo '<div class="help-block" id="fn-feedback">FIRST-NAME must be 2 characters or more.</div>';
					echo '</div>';
				}
				else if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"firstNameInvalidChar")){ //Invalid Char Error
					echo '<div class="form-group has-error" id="fn-group">';
					echo '<label class="control-label" for="first-name">First Name: </label>';
					echo '<input class="form-control" type="text" id="first-name" name="first-name"/>';
					echo '<div class="help-block" id="fn-feedback">FIRST-NAME can only include alphabetical characters, hyphens, and apostrophes.</div>';
					echo '</div>';
				}
				else { //No Error
					if(isset($_SESSION['firstname'])) { //First Name has data
						echo '<div class="form-group has-success" id="fn-group">';
						echo '<label class="control-label" for="first-name">First Name: </label>';
						echo '<input class="form-control" type="text" id="first-name" name="first-name" value="'.$_SESSION['firstname'].'"/>';
						echo '<div class="help-block" id="fn-feedback"></div>';
						echo '</div>';
					}
					else { //Default
						echo '<div class="form-group" id="fn-group">';
						echo '<label class="control-label" for="first-name">First Name: </label>';
						echo '<input class="form-control" type="text" id="first-name" name="first-name"/>';
						echo '<div class="help-block" id="fn-feedback"></div>';
						echo '</div>';
					}
				}
				
				//Last Name
				if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"lastNameNull")) { //Null Error
					echo '<div class="form-group has-error" id="ln-group">';
					echo '<label class="control-label" for="last-name">Last Name: </label>';
					echo '<input class="form-control" type="text" id="last-name" name="last-name"/>';
					echo '<div class="help-block" id="ln-feedback">LAST-NAME cannot be blank.</div>';
					echo '</div>';
				}
				else if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"lastNameShort")) { //Too Short Error
					echo '<div class="form-group has-error" id="ln-group">';
					echo '<label class="control-label" for="last-name">Last Name: </label>';
					echo '<input class="form-control" type="text" id="last-name" name="last-name"/>';
					echo '<div class="help-block" id="ln-feedback">LAST-NAME must be 2 characters or more.</div>';
					echo '</div>';
				}
				else if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"lastNameInvalidChar")) { //Invalid Char Error
					echo '<div class="form-group has-error" id="ln-group">';
					echo '<label class="control-label" for="last-name">Last Name: </label>';
					echo '<input class="form-control" type="text" id="last-name" name="last-name"/>';
					echo '<div class="help-block" id="ln-feedback">LAST-NAME can only include alphabetical characters, hyphens, and apostrophes.</div>';
					echo '</div>';
				}
				else { //No Error
					if(isset($_SESSION['lastname'])) { //Last Name has data
						echo '<div class="form-group has-success" id="ln-group">';
						echo '<label class="control-label" for="last-name">Last Name: </label>';
						echo '<input class="form-control" type="text" id="last-name" name="last-name" value="'.$_SESSION['lastname'].'"/>';
						echo '<div class="help-block" id="ln-feedback"></div>';
						echo '</div>';
					}
					else { //Default
						echo '<div class="form-group" id="ln-group">';
						echo '<label class="control-label" for="last-name">Last Name: </label>';
						echo '<input class="form-control" type="text" id="last-name" name="last-name"/>';
						echo '<div class="help-block" id="ln-feedback"></div>';
						echo '</div>';
					}
				}
				
				//Email
				if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"emailNull")) { //Null Error
					echo '<div class="form-group has-error" id="email-group">';
					echo '<label class="control-label" for="email">Email: </label>';
					echo '<input class="form-control" type="text" id="email" name="email"/>';
					echo '<div class="help-block" id="email-feedback">EMAIL cannot be blank.</div>';
					echo '</div>';
				}
				else if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"emailInvalidAddr")) { //Invalid Address Error
					echo '<div class="form-group has-error" id="email-group">';
					echo '<label class="control-label" for="email">Email: </label>';
					echo '<input class="form-control" type="text" id="email" name="email"/>';
					echo '<div class="help-block" id="email-feedback">Please enter a correct email address</div>';
					echo '</div>';
				}
				else { //No Error
					if(isset($_SESSION['email'])) { //Email has data
						echo '<div class="form-group has-success" id="email-group">';
						echo '<label class="control-label" for="email">Email: </label>';
						echo '<input class="form-control" type="text" id="email" name="email" value="'.$_SESSION['email'].'"/>';
						echo '<div class="help-block" id="email-feedback"></div>';
						echo '</div>';
					}
					else { //Default
						echo '<div class="form-group" id="email-group">';
						echo '<label class="control-label" for="email">Email: </label>';
						echo '<input class="form-control" type="text" id="email" name="email"/>';
						echo '<div class="help-block" id="email-feedback"></div>';
						echo '</div>';
					}
				}
				
				//Phone Number
				if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"phoneNumberNull")) { //Null Error
					echo '<div class="form-group has-error" id="pn-group">';
					echo '<label class="control-label" for="phone-number">Phone Number: </label>';
					echo '<input class="form-control" type="text" id="phone-number" name="phone-number"/>';
					echo '<div class="help-block" id="pn-feedback">PHONE NUMBER cannot be blank.</div>';
					echo '</div>';
				}
				else if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"phoneNumberInvalidNum")) { //Invalid Char Error
					echo '<div class="form-group has-error" id="pn-group">';
					echo '<label class="control-label" for="phone-number">Phone Number: </label>';
					echo '<input class="form-control" type="text" id="phone-number" name="phone-number"/>';
					echo '<div class="help-block" id="pn-feedback">Please enter a correct phone number</div>';
					echo '</div>';
				}
				else { //No Error
					if(isset($_SESSION['phoneNumber'])) { //Phone Number has data
						echo '<div class="form-group has-success" id="pn-group">';
						echo '<label class="control-label" for="phone-number">Phone Number: </label>';
						echo '<input class="form-control" type="text" id="phone-number" name="phone-number" value="'.$_SESSION['phoneNumber'].'"/>';
						echo '<div class="help-block" id="pn-feedback"></div>';
						echo '</div>';
					}
					else { //Default
						echo '<div class="form-group" id="pn-group">';
						echo '<label class="control-label" for="phone-number">Phone Number: </label>';
						echo '<input class="form-control" type="text" id="phone-number" name="phone-number"/>';
						echo '<div class="help-block" id="pn-feedback"></div>';
						echo '</div>';
					}
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
				
				//Comments
				if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"commentsNull")) { //Null Error
					echo '<div class="form-group has-error" id="comments-group">';
					echo '<label class="control-label" for="comments">Comment: </label>';
					echo '<input class="form-control" type="text" id="comments" name="comments"/>';
					echo '<div class="help-block" id="comments-feedback">COMMENT cannot be blank.</div>';
					echo '</div>';
				}
				else { //No Error
					if(isset($_SESSION['comments'])) { //Comments has data
						echo '<div class="form-group has-success" id="comments-group">';
						echo '<label class="control-label" for="comments">Comment: </label>';
						echo '<input class="form-control" type="text" id="comments" name="comments" value="'.$_SESSION['comments'].'"/>';
						echo '<div class="help-block" id="comments-feedback"></div>';
						echo '</div>';
					}
					else { //Default
						echo '<div class="form-group" id="comments-group">';
						echo '<label class="control-label" for="comments">Comment: </label>';
						echo '<input class="form-control" type="text" id="comments" name="comments"/>';
						echo '<div class="help-block" id="comments-feedback"></div>';
						echo '</div>';
					}
				}
				echo '<div class="form-group">';
				echo '<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>';
				echo '</div>';
				echo '</form>';
			}
		  
		  	else {
				$errors="";
				
				//First Name
				$firstName=$_POST['first-name'];
				$fnPattern="/^[a-zA-Z'-]+$/";
				if($firstName==NULL) //Empty Field
					$errors="firstNameNull";
				else if(strlen($firstName) < 2) //First Name is too short
					$errors="firstNameShort";
				else if(preg_match($fnPattern, $firstName) != 1) //First Name has an invalid character.
					$errors="firstNameInvalidChar";
				else //No Error
					$_SESSION['firstname']=$firstName;
				
				//Last Name
				$lastName=$_POST['last-name'];
				$lnPattern="/^[a-zA-Z'-]+$/";
				if($lastName==NULL) //Empty Field
					$errors.="lastNameNull";
				else if(strlen($lastName) < 2) //Last Name is too short
					$errors.="lastNameShort";
				else if(preg_match($lnPattern, $lastName) != 1) //Last Name has an invalid character.
					$errors.="lastNameInvalidChar";
				else //No Error
					$_SESSION['lastname']=$lastName;
				
				//Email
				$email=$_POST['email'];
				$ePattern='/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
				if($email==NULL) //Empty Field
					$errors.="emailNull";
				else if(preg_match($ePattern, $email) != 1) //Email has invalid address.
					$errors.="emailInvalidAddr";
				else //No Error
					$_SESSION['email']=$email;
				
				//Phone Number
				$phoneNumber=$_POST['phone-number'];
				$pnPattern='/^[0-9]{10}$/';
				if($phoneNumber==NULL) //Empty Field
					$errors.="phoneNumberNull";
				else if(preg_match($pnPattern, $phoneNumber) != 1) { //Phone number has other characters.
					$errors.="phoneNumberInvalidNum";
				}
				else //No Error
					$_SESSION['phoneNumber']=$phoneNumber;
				
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
				
				//Comments
				$comments=addslashes($_POST['comments']);
				if($comments==NULL) //Empty Field
					$errors.="commentsNull";
				else //No Error
					$_SESSION['comments']=$comments;
				
				if($errors != NULL)
					header("Location: index.php?page=contact&errMsg=$errors");
				
				//ODBC string
				$dbuser = 'webuser';
				$dbpass = 'Scvf15lv2EFP5NRo';
				$host = 'localhost';
				$db = 'contact_data';
				$dblink = new mysqli($host, $dbuser, $dbpass, $db);
				$sql = "Insert into `contact_info` (`first_name`,`last_name`,`email`,`phone_number`,`username`,`password`,`comment`) values ('$firstName','$lastName','$email','$phoneNumber','$username','$password','$comments')";
				$dblink->query($sql) or
					die("Something went wrong with: $sql".$dblink->error);
				echo "<h2> Your data has been successfully saved</h2>";
			}
		  ?>
      </div>
      <!-- col -->

    </div>
    <!-- row -->

  </div>
  <!-- container -->
  <script src="assets/js/event-attributes.js"></script>