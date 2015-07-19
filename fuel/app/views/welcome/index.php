<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carsignite</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	
</head>
<body>
	<div id="header">
		<div class="row">
			<div id="logo"></div>
			<nav>
				<ul>
					<li>World</li>
					<li>Friends</li>
				</ul>
			</nav>
			<div class="login register buttons">
				<button class="registerBtn" action="?register">Register</button><button class="loginBtn" action="?login">Log in</button>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="subnav">
		</div>
	</div>
	<footer>
		<div class="copyright">
			<p>&copy;CARSIGNITE</p>
		</div>
		<div class="footerLinks">
			<p><a href="#">About Us</a> | <a href="#">Help</a> | <a href="#">Contact Us</a></p>
		</div>
	</footer>
</body>
</html>
