<li>
    <article>
        <a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext("View album:"); ?> <?php echo getAnnotatedAlbumTitle();?>">
            <img src="<?php echo getAlbumThumb(); ?>" alt="<?php echo getAnnotatedAlbumTitle();?>">
        </a>
        <h3><a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext("View album:"); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a></h3>
        <time><?php printAlbumDate(""); ?></time>
    </article>
</li>