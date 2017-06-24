
<!-- Footer -->
<footer id="footer">
    <div class="inner">

        <section>
            <h2>Get in touch</h2>
            <?php dynamic_sidebar( 'widget-contact' ); ?>
        </section>
        <section>
            <h2>Follow</h2>
            <ul class="icons">
                <?php if ( get_theme_mod( 'sm_twitter' )): ?>
                <li><a href="<?php echo get_theme_mod( 'sm_twitter' ); ?>" target="_blank" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_facebook' )): ?>
                <li><a href="<?php echo get_theme_mod( 'sm_facebook' ); ?>" target="_blank" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_youtube' )): ?>
                    <li><a href="<?php echo get_theme_mod( 'sm_youtube' ); ?>" target="_blank" class="icon style2 fa-youtube-play"><span class="label">Youtube</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_instagram' )): ?>
                <li><a href="<?php echo get_theme_mod( 'sm_instagram' ); ?>" target="_blank" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_google' )): ?>
                    <li><a href="<?php echo get_theme_mod( 'sm_google' ); ?>" target="_blank" class="icon style2 fa-google-plus"><span class="label">Instagram</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_dribbble' )): ?>
                <li><a href="<?php echo get_theme_mod( 'sm_dribbble' ); ?>" target="_blank" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_github' )): ?>
                <li><a href="<?php echo get_theme_mod( 'sm_github' ); ?>" target="_blank" class="icon style2 fa-github-alt"><span class="label">GitHub</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_500px' )): ?>
                <li><a href="<?php echo get_theme_mod( 'sm_500px' ); ?>" target="_blank" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_behance' )): ?>
                    <li><a href="<?php echo get_theme_mod( 'sm_behance' ); ?>" target="_blank" class="icon style2 fa-behance"><span class="label">Behance</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_linked_in' )): ?>
                    <li><a href="<?php echo get_theme_mod( 'sm_linked_in' ); ?>" target="_blank" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_mobile' )): ?>
                <li><a href="tel:<?php echo str_replace(' ','', get_theme_mod( 'sm_mobile' )); ?>" target="_blank" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_email' )): ?>
                <li><a href="mailto:<?php echo get_theme_mod( 'sm_email' ); ?>" target="_blank" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sm_rss_feed' )): ?>
                    <li><a href="<?php echo get_theme_mod( 'sm_rss_feed' ); ?>" target="_blank" class="icon style2 fa-rss"><span class="label">RSS Feed</span></a></li>
                <?php endif; ?>
            </ul>
        </section>

        <ul class="copyright">
        <?php if ( get_theme_mod( 'setting_copyright' ) ): ?>
            <li><?php echo sprintf(get_theme_mod( 'setting_copyright' ), get_bloginfo('name')); ?></li>
        <?php else: ?>
            <li><?php echo sprintf("&copy; %s. All rights reserved.", get_bloginfo('name')); ?></li>
        <?php endif; ?>

            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            <li>Adapted for Wordpress by <a href="https://knock2u.ml">Knock2U</a></li>
        </ul>
    </div>
</footer>

</div>

<!-- Scripts -->
<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri() ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<?php wp_footer() ?>
</body>
</html>