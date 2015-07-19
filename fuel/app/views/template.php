<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Official Website of Laura Guzmán">
	<meta name="keywords" content="audio,video,music,songs,singer,songwriter,laura,guzman">
	<meta name="author" content="Carlos Sang">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Laura Guzmán</title>
	<link rel="icon" type="image/gif" href="<?= Uri::create('assets/img/icons/lg_icon.gif') ?>" />

	<?= Asset::css('screen.css') ?>
</head>
<body>
	<header>
		<div class="logo inline">
			<?= Asset::img('logos/laura_guzman.png'); ?><br/>
		</div>
	</header>
	<div class="container">
		<!-- <div class="top"> -->
			<!-- <div class="audio">
				<audio>
					<source src="<?//= Uri::create('assets/audio/songs/besos_frios.ogg') ?>" type="audio/ogg">
					<source src="<?//= Uri::create('assets/audio/songs/besos_frios.mp3') ?>" type="audio/mpeg">
					<source src="<?//= Uri::create('assets/audio/songs/besos_frios.wav') ?>" type="audio/wav">
				Your browser does not support the audio element.
				</audio>
				<div class="controls">
					<div class="slider">
						<div class="played">
						</div>
					</div>
					<div class="playpause">
						<p>></p>
					</div><div class="info">
						<p>Besos Frios</p>
					</div>
				</div>
			</div> -->
		<!-- </div> -->
		<div class="poster">
			<?= Asset::img('photoshoot/grass_2013/3.png'); ?>
		</div>
		<div class="center">
		<!-- <iframe id="ytplayer" type="text/html" width="640" height="360"
		src="https://www.youtube.com/embed/qOvdJwChJgY?color=white"
		frameborder="0" allowfullscreen></iframe> -->
			<?= isset($body) ? $body : null ?>
		</div>
	</div
	><footer>
		<div class="social_links">
			<div class="social f">
				<?= Html::anchor('https://www.facebook.com/lauragguzman', Asset::img('s_logos/lg_f_logo.gif')); ?>
			</div>
			<div class="social t">
				<?= Html::anchor('https://twitter.com/lauragguzmn', Asset::img('s_logos/lg_t_logo.gif')); ?>
			</div>
			<div class="social g">
				<?= Html::anchor('https://plus.google.com/u/0/117243538086802970780', Asset::img('s_logos/lg_g_logo.gif')); ?>
			</div>
		</div>
		<div class="copyright">
			<!-- <p>&copy;2013 CARLOS SANG | mail@carlossang.com</p> -->
		</div>
	</footer>
</body>

<?= Asset::js('jquery-1.10.2.min.js') ?>
<?= Asset::js('main.js') ?>

</html>
