<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Milly Cohen</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		<link rel="stylesheet" href="stylesheets/main.css">
		<link rel="stylesheet" href="stylesheets/index.css">
		<script src="scripts/dressup.js"></script>
	</head>
	<body>
		<?php include 'scripts/header.php'; siteheader('', 'Milly Cohen');?>
		<main>
			
			<div id="shirtformat">
				<img src="assets/images/shirt.png" id="shirt" draggable="true" ondragstart="drag(event)" ondragend="changeImage(event, 'shirton')">
			</div>
			<div id="pantsformat">
				<img src="assets/images/pants.png" id="pants" draggable="true" ondragstart="drag(event)" ondragend="changeImage(event, 'pantson')">
			</div>
			<div id="lsockformat">
				<img src="assets/images/sock.png" id="sock1" draggable="true" ondragstart="drag(event)" ondragend="changeImage(event, 'leftsock')">
			</div>
			<div id="rsockformat">
				<img src="assets/images/sock.png" id="sock2" draggable="true" ondragstart="drag(event)" ondragend="changeImage(event, 'rightsock')">
			</div>
			
			<?php include 'scripts/nav.php'; nav('', 'pages-projects/');?>

			<div id="frogarea">
				<img src="assets/images/nakedfrog.png" id="nakedfrog" ondrop="drop(event)" ondragover="allowDrop(event)">
			
				<img src="assets/images/leftsock.png" class="clothedfrog" id="leftsock">
				<img src="assets/images/rightsock.png" class="clothedfrog" id="rightsock">
				<img src="assets/images/pantson.png" class="clothedfrog" id="pantson">
				<img src="assets/images/shirton.png" class="clothedfrog" id="shirton">
			</div>
		</main>
		<?php include 'scripts/footer.php'; footer('');?>
	</body>
</html>