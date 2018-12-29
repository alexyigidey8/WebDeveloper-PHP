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
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	

	<div id="mainContainer">

		<div id="topContainer">
			<div id="navBarContainer">
				<nav class="navBar">
					<a href="index.php" class="logo"><img src="assets/images/icons/logo5.png"></a>
					<div class="group">
						<div class="navItem">
							<a href="search.php" class="navItemLink">Pesquisar 
								<img src="assets/images/icons/search.png" class="icon" alt="Search">
							</a>
						</div>
					</div>
					<div class="group">
						<div class="navItem">
							<a href="browse.php" class="navItemLink">Navegador</a>
						</div>
						<div class="navItem">
							<a href="yourMusic.php" class="navItemLink">Sua Música</a>
						</div>
						<div class="navItem">
							<a href="profile.php" class="navItemLink">Rosi Golan</a>
						</div>
					</div>
				</nav>

				
			</div>
			
		</div>

		<div id="nowPlayingBarContainer">

			<div id="nowPlayingBar">

				<div id="nowPlayingLeft">
					<div class="content">
						<span class="albumLink">
							<img src="//i.scdn.co/image/c9ffdfbed7e909b0fc4ca210af52ca63ebdc696a" class="albumArtwork">
						</span>
						<div class="trackInfo">
							<span class="trackName">
								<span>Collecting Bullets</span>
							</span>
							<span class="artistName">
								<span>Rosi Golan</span>
							</span>
							
						</div>
					</div>

				</div>

				<div id="nowPlayingCenter">

					<div class="content playerControls">

						<div class="buttons">

							<button class="controlButton shuffle" title="Shuffle button">
								<img src="assets/images/icons/shuffle.png" alt="Shuffle">
							</button>

							<button class="controlButton previous" title="Previous button">
								<img src="assets/images/icons/previous.png" alt="Previous">
							</button>

							<button class="controlButton play" title="Play button">
								<img src="assets/images/icons/play.png" alt="Play">
							</button>

							<button class="controlButton pause" title="Pause button" style="display: none;">
								<img src="assets/images/icons/pause.png" alt="Pause">
							</button>

							<button class="controlButton next" title="Next button">
								<img src="assets/images/icons/next.png" alt="Next">
							</button>

							<button class="controlButton repeat" title="Repeat button">
								<img src="assets/images/icons/repeat.png" alt="Repeat">
							</button>

						</div>


						<div class="playbackBar">

							<span class="progressTime current">0.00</span>

							<div class="progressBar">
								<div class="progressBarBg">
									<div class="progress"></div>
								</div>
							</div>

							<span class="progressTime remaining">0.00</span>


						</div>


					</div>


				</div>

				<div id="nowPlayingRight">
					<div class="volumeBar">
						<button class="controlButton volume" title="Volume Button">
							<img src="assets/images/icons/volume.png" alt="Volume">
						</button>
						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</body>
</html>