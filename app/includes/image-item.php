<li>
    <a href="<?php echo html_encode(getImageLinkURL());?>" title="<?php echo getBareImageTitle();?>" class="image-link js-image-link">
        <img src="<?php echo getCustomSizedImageThumbMaxSpace(getOption("thumb_size"), getOption("thumb_size")); ?>" alt="<?php echo getBareImageTitle();?>">
    </a>
</li>