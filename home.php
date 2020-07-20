<?php
include 'include/header.php';
if (!isset($_SESSION["user"])) {
	header("location: index.php");
}
//Getting current token from base:
	$uniqueid = $_SESSION["uniqueid"];
	$query = mysqli_query($con, "SELECT apitoken FROM user WHERE id = '$uniqueid' ") or die();
	$result = mysqli_fetch_assoc($query);
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
<style type="text/css">
	.dashboard{
		padding: 10px;

	}
</style>
<div class="dashboard">
	<a href="logout.php">Logout</a>
	<h2 style="text-align: center;">Welcome <?php echo $_SESSION["user"]; ?></h2>
	<div class="panel">
		<h3 style="color:green;">Account Verified</h3>
		
	</div>
</div>
<?php
include 'include/footer.php';
?>