<?php
include 'include/db.php';
session_start();
if (isset($_SESSION["user"])) {
	header("location: home.php");
}

// For login
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password' ") or die();
	if (!$row = $query -> fetch_assoc()) {
		echo "<script>alert('User not found')</script>";
	}else{
		//Check if user is verified
		if ($row['verify'] == 0) {
			$msg = 'Kindly verify your email!, verification code sent to your mail';	
			//Send new mail
			//* Generate token from time
			$token = md5(time());
			//Load token to user column 
			mysqli_query($con, "UPDATE user SET apitoken = '$token' WHERE username = '$username'");
			//Now sending the email
			//Define $url
			$url = BASE_URL.'index.php?token='.$token.'&email='.$row['email'];
			//user email
			$user_mail = $row['email'];
			$message = 'Message: Kindly verify your email account below: <br> Click Here : '.$url;
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			// Mail it
			$mail = mail($user_mail, 'Verication Email', $message, $headers);
			if ($mail) {
				$msg = 'Kindly verify your email!, verification code sent to your mail';	
			}
		} else {
			//Login user
			$user = $row['first'].' '.$row['last'];
			$uname = $row['username'];
			$uniqueid = $row["id"];
			$_SESSION['uname'] = $uname;
			$_SESSION['user'] = $user;
			$_SESSION["uniqueid"] = $uniqueid;
			header("location: home.php");
		}
		
	}
}

//For email confirmation
if (isset($_GET['token'])) {
	//Check if token valid
	$token = $_GET['token'];
	$email = $_GET['email'];
	$query = mysqli_query($con, "SELECT * FROM user WHERE apitoken='$token' AND email='$email' ") or die();
	if (!$row = $query -> fetch_assoc()) {
		echo "<script>alert('User token not found, try again')</script>";
	}else{
		mysqli_query($con, "UPDATE user SET verify = 1 WHERE apitoken = '$token' AND email = '$email'");
		echo "<script>alert('Email verification successful')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login Page
	</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="loginbox">
		<img src="techme.PNG" class="avatar">
		<h2>Login Here</h2>
		<?php 
			if (isset($msg)) {
				?>
					<p style="background-color: red;color:white;padding:10px;text-align:center;"><?php echo $msg; ?></p>
				<?php
			}
		?>
		<form method="post" action="">
			<p>Username:</p>
			<input type="text" name="username" placeholder="Enter your username" required="">

			<p>Password:</p>	
			<input type="Password" name="password" placeholder="Enter your Password" required="">
			<input type="submit" name="submit" value="Login">
		</form>
		<a href="register.php">Register Here</a><br>
	</div>
</body>
</html>