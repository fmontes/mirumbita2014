<li>
    <article>
        <a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext("View album:"); ?> <?php echo getAnnotatedAlbumTitle();?>" class="album-thumb">
            <img src="<?php echo getCustomAlbumThumb(80,80,80,80); ?>" alt="<?php echo getAnnotatedAlbumTitle();?>">
        </a>
        <div class="album-info">
            <h3 class="album-title"><a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext("View album:"); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a></h3>
            <div class="album-meta">
                <time datetime="<?php printAlbumDate(); ?>" class="album-date"><?php printAlbumDate(); ?></time>
                <span class="album-image-number"><?php echo getNumImages() . " " . gettext("photos") ?></span>
            </div>
        </div>
    </article>
</li>