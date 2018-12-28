<?php

	include("includes/config.php");

	//session_destroy(); LOGOUT

	if ($_SESSION['userLoggedIn']) 
	{
		$userLoggedIn = $_SESSION['userLoggedIn'];
	}
	else
	{
		header("Location: register.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Bem-vindo ao Spotify-Clone </title>
</head>
<body>
	HELLO!
</body>
</html>