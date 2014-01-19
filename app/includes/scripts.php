<!-- Loading jQuery from CDN or local if not available -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
    window.jQuery || document.write('
        <!-- build:js(app) /js/jquery.js -->
        <script src="bower_components/jquery/jquery.min.js"></script>
        <!-- endbuild -->
    ');
</script>

<!-- build:js(app) /js/plugins.js -->
<script src="bower_components/happyjs/happy.js"></script>
<!-- endbuild -->

<!-- build:js(app) /js/main.js -->
<script src="<?php echo $_zp_themeroot; ?>/js/main.js"></script>
<!-- endbuild -->

<!-- Google Analytics -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>