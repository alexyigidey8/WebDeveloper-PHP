<!--
*   Data: 30/12/2018
*   Autor: Thelsandro Costa Antunes
*	Técnico em Redes de Computadores - CETAM
*   Discente de Engenharia de Computação - UEA
*   Projeto de Aplicativo de Músicas em PHP (Clone do Spotify)
*   8ª Versão
-->

<?php include("includes/header.php"); ?>
	<h1 class="pageHeadingBig">SpotThel</h1>
	<div class="gridViewContainer">
		<?php
			$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY rand() LIMIT 10" );
			while($row = mysqli_fetch_array($albumQuery))
			{
				echo "	<div class='gridViewItem'> 

							<a href='album.php?id=".$row['id']."' >

								<img src='". $row['artworkpath']."'>
								
								<div class='gridViewInfo'>
									".$row['title']." 
								</div>
							</a>
						</div>";
			}
		?>
	</div>

<?php include("includes/footer.php"); ?>
				