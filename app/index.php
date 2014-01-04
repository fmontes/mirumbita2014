<?php
	// force UTF-8
	if (!defined('WEBPATH')) die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include 'includes/head_meta.php'; ?>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>

		<?php printLatestAlbums(getOption('latest_albums_number_home'), true, true, false, '', '200', '300', false, false); ?>

		<?php include 'includes/footer.php'; ?>
	</body>
</html>