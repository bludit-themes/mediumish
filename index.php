<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP.'topbar.php'); ?>

	<!-- Content -->
	<?php
		// $WHERE_AM_I variable detect where the user is browsing
		// If the user is watching a particular page the variable takes the value "page"
		// If the user is watching the frontpage the variable takes the value "home"
		if ($WHERE_AM_I == 'page') {
			include(THEME_DIR_PHP.'page.php');
		} else {
			include(THEME_DIR_PHP.'home.php');
		}
	?>

	<!-- Javascript -->
	<?php
		// Include Jquery file from Bludit Core
		echo Theme::jquery();

		echo Theme::js('js/tether.min.js');

		// Include javascript Bootstrap file from Bludit Core
		echo Theme::jsBootstrap();

		echo Theme::js('js/ie10-viewport-bug-workaround.js');
	?>

	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>