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
		<?php printHomeLink('', ' | '); ?><a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php echo gettext('Albums Index'); ?>"><?php echo getGalleryTitle();?></a> | <?php printParentBreadcrumb(); ?><?php printAlbumTitle();?>
		<?php if (hasPrevImage()) { ?>
			<a href="<?php echo html_encode(getPrevImageURL());?>" title="<?php echo gettext("Previous Image"); ?>"><?php echo gettext("prev"); ?></a>
		<?php } if (hasNextImage()) { ?>
			<a href="<?php echo html_encode(getNextImageURL());?>" title="<?php echo gettext("Next Image"); ?>"><?php echo gettext("next"); ?></a>
		<?php } ?>
		<?php printHomeLink('', ' | '); ?><a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php gettext('Albums Index'); ?>"><?php echo getGalleryTitle();?></a> | <?php printParentBreadcrumb("", " | ", " | "); printAlbumBreadcrumb("", " | "); ?><?php printImageTitle(true); ?>
		<a href="<?php echo html_encode($fullimage);?>" title="<?php echo getBareImageTitle();?>">
			<?php printDefaultSizedImage(getImageTitle()); ?>
		</a>
		<?php printImageDesc(); ?>
		<?php
			if (getImageMetaData()) {
				printImageMetadata('', false); ;
			}
		?>
		<?php printTags('links', gettext('<strong>Tags:</strong>').' ', 'taglist', ''); ?>

		<?php include 'includes/footer.php'; ?>
	</body>
</html>