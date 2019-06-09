<!DOCTYPE html>
<html lang ="en-US">
	<head>
		<title>Drawings | Milly Cohen</title>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="../stylesheets/main.css">
		<link rel="stylesheet" href="../stylesheets/pages.css">
		<link rel="stylesheet" href="../stylesheets/content.css">

		<script src="scripts/stickynav.js"></script>
	</head>
	<body>
		<?php include '../scripts/header.php'; siteheader('../','Drawings');?>
		<main>
			<?php include '../scripts/nav.php'; nav('../', '');?>
			<aside id="stickerside">
				STICKERS
			</aside>
			<section id="content">

				<div id="drawings">

					<div class="piece">
					<img width="200" src="../assets/content/animation/aerobicsfishgif.gif">
					</div>

					<div class="piece">
					<img width="300" src="../assets/content/animation/flygif.gif">
					</div>

					<div class="piece">
					<img width="200" src="../assets/content/animation/steamyguy.gif">
					</div>

					<div class="piece">
					<video controls width="200">
						<source src="../assets/content/animation/thebest.mp4" type="video/mp4">
					</video>
					</div>

					<div class="piece">
					<img width="200" src="../assets/content/animation/velcrogif.gif">
					</div>

				</div>

			</section>
		</main>
		<?php include '../scripts/footer.php'; footer('../');?>
	</body>
</html>