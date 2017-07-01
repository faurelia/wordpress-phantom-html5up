<?php

require get_template_directory() . "/inc/customizer.php";
require get_template_directory() . "/inc/widgets-social.php";

function setup_phantom_settings() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'homepage-thumb', 300, 300, true );
    add_image_size( 'featured-thumb', 1100, 550, true );

    add_theme_support( 'html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );
}

add_action('after_setup_theme', 'setup_phantom_settings');

// Register Navigation Menus
function register_phantom_nav() {

    $locations = array(
        'main-menu' => __( 'Main Menu' , 'html5phantom'),
    );

    register_nav_menus( $locations );

}
add_action( 'init', 'register_phantom_nav' );

// Register Widgets
function register_theme_widget_areas() {

    register_sidebar( array(
        'id'            => 'widget-footer-section-1',
        'name'          => __( 'Footer Section 1' , 'html5phantom' ),
        'description'   => __( 'Add widget at the bottom left of each page', 'html5phantom' ),
        'before_widget' => '<div class="widget widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ) );

    register_sidebar( array(
        'id'            => 'widget-footer-section-2',
        'name'          => __( 'Footer Section 2' , 'html5phantom' ),
        'description'   => __( 'Add widget at the bottom right of each page', 'html5phantom' ),
        'before_widget' => '<div class="widget widget-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ) );

    register_widget( 'Social_Links_Widget' );

}

add_action( 'widgets_init', 'register_theme_widget_areas' );

function theme_phantom_enqueue_style() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'theme', get_stylesheet_uri() );

    wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', array('jquery'), '3.0.1', true );
    wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', array('jquery'), null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
    wp_enqueue_script( 'theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_phantom_enqueue_style' );

function pre_comment_form () {
    echo '<div class="row uniform">';
}

add_action('comment_form_top', 'pre_comment_form');

function post_comment_form () {
    echo '</div>';
}

add_action('comment_form', 'post_comment_form');
