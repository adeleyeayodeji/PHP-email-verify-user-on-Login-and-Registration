<?php session_start(); 

include 'db.php';
/*
This script is wrtten by 
	Author = Adeleye Ayodeji 
	FacebookPage = https://www.facebook.com/biggidroid
	Developer = Adeleye Ayodeji
	Developer URL = https://www.adeleyeayodeji.com
	WhatsApp = +2347034803384
*/
	
	$query = mysqli_query($con, "SELECT * FROM sitedetails");
	$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $row["sitetitle"] ?></title>
	<meta charset="utf-8">
	<base href="<?php echo BASE_URL; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keyword" content="Biggidroid, Biggidroid simple php cms, php cms">
	<meta name="description" content="<?php echo $row["sitetagline"] ?>">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="icon" href="img/<?php echo $row["sitelogo"] ?>">
	<script src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
	<script src="js/search.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
</head>
<body>
<div class="container">
	<!-- Welcome message to Admin -->
		<?php if (isset($_SESSION["admin"])) { ?><p class="linktag"><a href="admin/">
	Welcome <?php echo $_SESSION["user"]; ?> </a></p><?php
}; ?>
<!-- Welcome message to Admin ends here -->
	<div class="header">
		<!--Logo begin Here -->
		<div class="logo">
			<a href=""><img align="center" class="sitelogo" src="image/<?php echo $row["sitelogo"] ?>"></a>
		</div>
		<!--Logo ends Here -->
		<div class="mainhead">
			<!-- Site title begins here -->
			<h2><?php echo $row["sitetitle"] ?></h2>
			<!-- Site title ends here -->

			<!-- Site tagline begins here -->
			<span class="sitetagline"><?php echo $row["sitetagline"] ?></span>
			<!-- Site tagline ends here -->
		</div>
		<br>
	</div>