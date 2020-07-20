<?php
	include 'include/db.php';
	$first = $_POST['first'];
	$last = $_POST['last'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$email = $_POST['email'];
	$check = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' AND password = '$password'") or die();
	if (mysqli_num_rows($check) == 1) {
		?>
		<script type="text/javascript">
			alert("User already register");
			window.location.href="index.php";
		</script>
		<?php
	}else{
			$query = mysqli_query($con, "INSERT INTO user(first, last, username, password, email) VALUES('$first', '$last', '$username', '$password', '$email') ") or die();
			if ($query) {
					//Check if token valid
					$msg = 'Kindly verify your email!, verification code sent to your mail';	
					//Send new mail
					//* Generate token from time
					$token = md5(time());
					//Load token to user column 
					mysqli_query($con, "UPDATE user SET apitoken = '$token' WHERE username = '$username'");
					//Now sending the email
					//Define $url
					$url = BASE_URL.'index.php?token='.$token.'&email='.$email;
					//user email
					$user_mail = $email;
					$message = 'Message: Kindly verify your email account below: <br> Click Here : '.$url;
					$headers = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					// Mail it
					mail($user_mail, 'Verication Email', $message, $headers);
					if ($mail) {
						$msg = 'Kindly verify your email!, verification code sent to your mail';	
					}
				?>
					<script type="text/javascript">
						alert("User registered, now login");
						window.location.href="index.php";
					</script>
				<?php
			}
			else{
				echo "error";
			}		
	}


?>