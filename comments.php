<?php

if (! empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die ('Please do not load this page directly. Thanks!');
}

if ( post_password_required() ) {
    return;
}

if ( have_comments() ) {

    echo '<h3 id="comments">';

    if (1 == get_comments_number()) {
        printf(__('One response to %s'), '&#8220;' . get_the_title() . '&#8221;');
    } else {
        printf(_n('%1$s response to %2$s', '%1$s responses to %2$s', get_comments_number()),
            number_format_i18n(get_comments_number()), '&#8220;' . get_the_title() . '&#8221;');
    }

    echo '</h3>';

    $prev = get_previous_comments_link();
    $next = get_next_comments_link();

    if ( $prev || $next ):
    ?>
    <div class="navigation nav-comments">
        <div class="alignleft"><?php previous_comments_link() ?></div>
        <div class="alignright"><?php next_comments_link() ?></div>
    </div>
    <?php endif; ?>

    <ol class="commentlist">
    <?php wp_list_comments(); ?>
    </ol>

    <?php if ( $prev || $next ): ?>
    <div class="navigation nav-comments">
        <div class="alignleft"><?php previous_comments_link() ?></div>
        <div class="alignright"><?php next_comments_link() ?></div>
    </div>
    <?php endif;
}

$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

$args = array(
    'fields' => array(
        'author' => '<div class="4u 12u$(small)">
            <input type="text" id="author" name="author" value="'.esc_attr( $commenter['comment_author'] ).'" ' . $aria_req . '/>
            <label for="author">' . __( 'Name', 'html5phantom' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
        </div>',
        'email' => '<div class="4u 12u$(small)">
            <input type="email" id="email" name="email" value="'.esc_attr( $commenter['comment_author_email'] ).'" ' . $aria_req . '/>
            <label for="email">' . __( 'Email', 'html5phantom' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
        </div>',
        'url' => '<div class="4u 12u$(small)">
            <input type="url" id="url" name="url" value="'.esc_attr( $commenter['comment_author_url'] ).'">
            <label for="url">' . __( 'Website', 'html5phantom' ) . '</label>
        </div>',
    ),
    'comment_field' => '<div class="12u$">
        <div class="textarea-wrapper">
            <textarea name="comment" id="comment" rows="1" aria-required="true" style="overflow: hidden; resize: none; height: 59px;"></textarea>
            <label for="comment">' . _x( 'Comment', 'noun', 'html5phantom' ) . '</label>
        </div>
    </div>',
    'label_submit' => __( 'Post Comment', 'html5phantom' ),
    'class_submit' => 'special',
    'submit_field' => '<div class="12u$">%2$s<ul class="actions"><li>%1$s</li></ul></div>',
    'submit_button' => '<input type="submit" name="%1$s" id="%2$s" value="%4$s" class="%3$s">',
);

comment_form($args);
