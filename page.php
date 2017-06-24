
<?php get_header(); ?>

<div id="main">
    <div class="inner">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title() ?></h1>
            <span class="image main">
            <?php if ( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('featured-thumb') ?>
            <?php endif; ?>
        </span>

            <?php the_content() ?>

        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

