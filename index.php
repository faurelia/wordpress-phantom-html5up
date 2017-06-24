<?php get_header(); ?>
<!-- Main -->
<div id="main">
        <div class="inner">
            <header>
            <?php if ( get_theme_mod( 'setting_cta_heading' ) ): ?>
                <h1><?php echo get_theme_mod( 'setting_cta_heading' ) ?></h1>
            <?php else: ?>
                <h1>This is Phantom, a free, fully responsive site<br />template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'setting_cta_description' ) ): ?>
                <p><?php echo get_theme_mod( 'setting_cta_description' ) ?></p>
            <?php else: ?>
                <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
            <?php endif; ?>


            </header>
            <section class="tiles">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="style<?php echo mt_rand(1,6); ?>">
                    <span class="image">
                        <?php if ( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail('homepage-thumb') ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri() ?>/images/pic01.jpg" alt="" />
                        <?php endif; ?>
                    </span>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title() ?>">
                        <h2><?php the_title() ?></h2>
                        <div class="content"><?php the_date('F d, Y') ?></div>
                    </a>
                </article>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            </section>
        </div>
    </div>

<?php get_footer(); ?>

