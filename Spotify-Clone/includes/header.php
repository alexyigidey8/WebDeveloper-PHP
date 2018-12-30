<?php

	include("includes/config.php");
	include("includes/classes/Album.php");
	include("includes/classes/Artist.php");
	include("includes/classes/Song.php");


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
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	

	<div id="mainContainer">

		<div id="topContainer">
			<?php include("includes/navBarContainer.php")?>

			<div id="mainViewContainer">
				<div id="mainContent">