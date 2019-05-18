<!DOCTYPE html>
<html lang ="en-US">
	<head>
		<title>Contact | Milly Cohen</title>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="stylesheets/main.css">
		<link rel="stylesheet" href="stylesheets/pages.css">

		<style>
			#plane {
				width: 100%;
			}
		</style>
	</head>
	<body>
		<?php include 'scripts/header.php'; siteheader('','Contact');?>
		<main>
			<?php include 'scripts/nav.php'; nav('', 'pages-projects/');?>
		
			<aside id="stickerside">
				<img src="assets/images/paper.png" id="plane" alt="Paper Airplane">
			</aside>
		
			<section id="content">
				<div class="contact"><label>Email: </label><span>millycohen69@gmail.com</span></div>
				
				<div class="contact"><label>Phone: </label><span>305-610-1422</span></div>
				
				<div class="contact"><label>Instagram: </label><span>millysm</span></div>
				
				<p id="formtitle">Questions? Concerns? Email me!</p>
				<fieldset>
				<form method="POST" action="mailto:millyguesswhat@gmail.com">
					<label class="indent">First Name: </label><input name="fname" type="text" size="30">
					
					<br>
					
					<label class="indent">Last Name: </label><input name="lname" type="text" size="30">
					
					<br>
					
					<label>Email Address: </label><input name="email" type="email" size="30">
					
					<br>
					
					<label class="indent">Subject: </label><input name="subject" type="text" size="55">
					
					<br>
					
					<label class="indent">Message: </label><textarea rows="10" cols="55"></textarea>
					
					<br>
					
					<div id="buttonalign">
						<button type="reset">Erase Everything</button>
					<button type="submit">Send</button>
					</div>
					</fieldset>
				</form>
			</section>
		</main>
		<?php include 'scripts/footer.php';?>
	</body>
</html>