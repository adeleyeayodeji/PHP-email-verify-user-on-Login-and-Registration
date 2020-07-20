<!DOCTYPE html>
<html>
<head>
	<title>
		Register Page
	</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	.loginbox{
		height: 500px;
	}
</style>
</head>
<body>
	<div class="loginbox">
		<img src="techme.png" class="avatar">
		<h2>Register</h2>
		<form method="post" action="insert.php">
			<p>First Name:</p>
			<input type="text" name="first" placeholder="Enter your firstname" required="">
			<p>Last Name:</p>
			<input type="text" name="last" placeholder="Enter your lastname" required="">
			<p>Email:</p>
			<input type="text" name="email" placeholder="Enter your Email" required="">
			<p>Username:</p>
			<input type="text" name="username" placeholder="Enter your username" required="">
			<p>Password:</p>	
			<input type="Password" name="password" placeholder="Enter your Password" required="">
			<input type="submit" value="Register">
		</form>
		<a href="login.php">Login Here</a><br>
	</div>
</body>
</html>