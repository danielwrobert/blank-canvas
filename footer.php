        </div> <!-- END .content -->
    </div> <!--! end of #main -->

    <footer>
        <p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
    </footer>

    <?php wp_footer(); ?>


    <!-- scripts (can be concatenated and minified via ant build script, if used)-->
    
    <!-- end scripts-->


    <script> // Change UA-XXXXX-X to be your site's ID
        window._gaq = [['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
        Modernizr.load({
            load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
        });
    </script>


    <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
  
</body>
</html>
