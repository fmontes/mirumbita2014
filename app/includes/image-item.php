<li class="js-image-listing-item">
    <a href="<?php echo html_encode(getImageLinkURL());?>" title="<?php echo getBareImageTitle();?>" class="image-link js-image-link">
        <img src="<?php echo $_zp_themeroot; ?>/images/loader.gif" data-src="<?php echo getCustomSizedImageThumbMaxSpace(getOption("thumb_size"), getOption("thumb_size")); ?>" alt="<?php echo getBareImageTitle();?>">
    </a>
</li>