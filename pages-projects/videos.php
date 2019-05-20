<!DOCTYPE html>
<html lang ="en-US">
	<head>
		<title>Videos | Milly Cohen</title>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="../stylesheets/main.css">
		<link rel="stylesheet" href="../stylesheets/pages.css">
		
	<style>
		iframe {
			margin-top: 50px;
		}
	</style>
	</head>
	<body>
		<?php include '../scripts/header.php'; siteheader('../','Videos');?>
		<main>
			<?php include '../scripts/nav.php'; nav('../', '');?>
			<aside id="stickerside">
				STICKERS
			</aside>
			<section id="content">
			<!--
				the poster attribute allows for a gif or image to show
				until someone hits play!

				<video controls poster="/images/w3html5.gif">
					<source src="movie.mp4" type="video/mp4">
					<source src="movie.ogg" type="video/ogg">
					Your browser does not support the video tag.
				</video>  
			-->
				<iframe width="560" height="315" src="https://www.youtube.com/embed/mViPAICrhxM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/gdtf6xSabws" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/I4m4l8SmrL0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/cVaAjgkFZHk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/nPUWogKsOhs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/tEM-_4EgD9g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/pg3-6Flkf5Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</section>
		</main>
		<?php include 'scripts/footer.php'; footer('../');?>
	</body>
</html>