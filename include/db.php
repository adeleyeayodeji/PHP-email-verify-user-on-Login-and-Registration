<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "email_very";

$con = mysqli_connect($localhost, $username, $password, $database) or die();
define('BASE_URL', 'http://localhost/email_token/');
?>