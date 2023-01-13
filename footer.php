
<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <section>
        <?php if ( is_active_sidebar('widget-footer-section-1') ): ?>
            <?php dynamic_sidebar( 'widget-footer-section-1' ); ?>
        <?php else: ?>
            <h2><?php _e('Get in touch', 'html5phantom') ?></h2>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field half">
                        <input type="text" name="name" id="name" placeholder="<?php _e('Name', 'html5phantom') ?>">
                    </div>
                    <div class="field half">
                        <input type="email" name="email" id="email" placeholder="<?php _e('Email Address', 'html5phantom') ?>">
                    </div>
                    <div class="field">
                        <div class="textarea-wrapper"><textarea name="message" id="message" placeholder="<?php _e('Message', 'html5phantom') ?>" rows="1" class="footer-textarea"></textarea></div>
                    </div>

                </div>
                <ul class="actions">
                    <li><input type="submit" value="<?php _e('Clear', 'html5phantom') ?>"></li>
                    <li><input type="submit" value="<?php _e('Send Message', 'html5phantom') ?>" class="primary"></li>
                </ul>
            </form>
        <?php endif; ?>
        </section>
        <section>
        <?php if ( is_active_sidebar('widget-footer-section-2') ): ?>
            <?php dynamic_sidebar( 'widget-footer-section-2' ); ?>
        <?php else: ?>
            <div class="widget">
                <h2><?php _e('Follow', 'html5phantom') ?></h2>
                <ul class="icons">
                    <?php
                    $social_link_id = (array) get_theme_mod('phantom_social_link_id');

                    // set default links
                    if (! array_filter($social_link_id)) {
                        $social_link_id = array(
                            'twitter'   => 'https://twitter.com',
                            'facebook'  => 'https://facebook.com',
                            'instagram' => 'https://instagram.com',
                            'google'    => 'https://plug.google.com',
                            'linkedin'    => 'https://linkedin.com',
                            'phone'     => '+1234567890',
                            'email'     => 'example@domain.com',
                            'rss'       => '#',
                        );
                    }

                    ?>

                    <?php if ( $social_link_id['twitter'] ): ?>
                    <li><a href="<?php echo $social_link_id['twitter'] ?>" target="_blank" class="icon brands style2 fa-twitter"><span class="label"><?php _e('Twitter','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['facebook'] ): ?>
                    <li><a href="<?php echo $social_link_id['facebook'] ?>" target="_blank" class="icon brands style2 fa-facebook-f"><span class="label"><?php _e('Facebook','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['youtube'] ): ?>
                        <li><a href="<?php echo $social_link_id['youtube'] ?>" target="_blank" class="icon brands style2 fa-youtube-play"><span class="label"><?php _e('YouTube','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['instagram'] ): ?>
                    <li><a href="<?php echo $social_link_id['instagram'] ?>" target="_blank" class="icon brands style2 fa-instagram"><span class="label"><?php _e('Instagram','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['google'] ): ?>
                        <li><a href="<?php echo $social_link_id['google'] ?>" target="_blank" class="icon brands style2 fa-google-plus"><span class="label"><?php _e('Google Plus','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['dribbble'] ): ?>
                    <li><a href="<?php echo $social_link_id['dribbble'] ?>" target="_blank" class="icon brands style2 fa-dribbble"><span class="label"><?php _e('Dribbble','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['github'] ): ?>
                    <li><a href="<?php echo $social_link_id['github'] ?>" target="_blank" class="icon brands style2 fa-github"><span class="label"><?php _e('GitHub','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['500px'] ): ?>
                    <li><a href="<?php echo $social_link_id['500px'] ?>" target="_blank" class="icon brands style2 fa-500px"><span class="label"><?php _e('500px','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['behance'] ): ?>
                        <li><a href="<?php echo $social_link_id['behance'] ?>" target="_blank" class="icon brands style2 fa-behance"><span class="label"><?php _e('Behance','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['linkedin'] ): ?>
                        <li><a href="<?php echo $social_link_id['linkedin'] ?>" target="_blank" class="icon brands style2 fa-linkedin"><span class="label"><?php _e('LinkedIn','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['phone'] ): ?>
                    <li><a href="tel:<?php echo $social_link_id['phone'] ?>" target="_blank" class="icon style2 solid fa-phone"><span class="label"><?php _e('Phone','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['email'] ): ?>
                    <li><a href="mailto:<?php echo $social_link_id['email'] ?>" target="_blank" class="icon style2 solid fa-envelope"><span class="label"><?php _e('Email','html5phantom') ?></span></a></li>
                    <?php endif; ?>

                    <?php if ( $social_link_id['rss'] ): ?>
                        <li><a href="<?php echo $social_link_id['rss'] ?>" target="_blank" class="icon style2 solid fa-rss"><span class="label"><?php _e('RSS Feed','html5phantom') ?></span></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endif; ?>
        </section>

        <ul class="copyright">
            <?php if ( get_theme_mod( 'setting_copyright' ) ): ?>
            <li><?php printf(__(get_theme_mod( 'setting_copyright' ), 'html5phantom'), get_bloginfo('name')) ?></li>
            <?php else: ?>
            <li><?php printf(__("&copy; %s. All rights reserved.", 'html5phantom'), get_bloginfo('name')) ?></li>
            <?php endif; ?>
            <li><?php printf(__('Design by <a href="%1$s" target="_blank">HTML5 UP</a>', 'html5phantom'), 'https://html5up.net' ); ?></li>
        </ul>
    </div>
</footer>

</div>

<!-- Scripts -->
<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri() ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<?php wp_footer() ?>
</body>
</html>