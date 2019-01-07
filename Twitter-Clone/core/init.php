<?php 

	include("core/database/connection.php");
	include("includes/classes/User.php");
	include("includes/classes/Follow.php");
	include("includes/classes/Tweet.php");
	
	global $pdo;

	session_start();

	$getFromU = new User($pdo);
	$getFromF = new Follow($pdo);
	$getFromT = new Tweet($pdo);
	
	define("BASE_URL", "http://localhost/WebDeveloper/Twitter-Clone/");
?>