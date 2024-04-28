        
        </main><!-- end #main-content -->

        <footer id="site-footer">
            <div class="container">
                <div class="flex">
                    <div class="footer-widget-1">
                        <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-hounter.png" alt="Hounter">
                        <p><?php _e( 'We provide information about properties such <br/>as houses, villas and apartments to <br/>help people find their dream home', 'hounter' ); ?></p>
                        <ul class="social-links no-style flex flex-align-center flex-justify-between">
                            <li><a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_facebook.png"></a></li>
                            <li><a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_twitter.png"></a></li>
                            <li><a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_instagram.png"></a></li>
                        </ul>
                    </div><!-- end .footer-widget-1 -->

                    <div class="footer-widget-2">
                        <h4 class="widget-title"><?php _e( 'Property', 'hounter' ); ?></h4>
                        <ul class="no-style">
                            <li><a href="#">House</a></li>
                            <li><a href="#">Apartment</a></li>
                            <li><a href="#">Villa</a></li>
                        </ul>
                    </div><!-- end .footer-widget-2 -->

                    <div class="footer-widget-3">
                        <h4 class="widget-title"><?php _e( 'Article', 'hounter' ); ?></h4>
                        <ul class="no-style">
                            <li><a href="#">New Article</a></li>
                            <li><a href="#">Popular Article</a></li>
                            <li><a href="#">Most Read</a></li>
                            <li><a href="#">Tip & Tricks</a></li>
                        </ul>
                    </div><!-- end .footer-widget-3 -->

                    <div class="footer-widget-4">
                        <h4 class="widget-title"><?php _e( 'Contact', 'hounter' ); ?></h4>
                        <ul class="no-style">
                            <li>2464 Royal Ln. Mesa, New Jersey 45463</li>
                            <li>(671) 555-0110</li>
                            <li>info@hounter.com</li>
                        </ul>
                    </div><!-- end .footer-widget-4 -->
                </div>
            </div>
        </footer><!-- end #site-footer -->

        <?php wp_footer(); ?>
    </body>
</html>