<?php

function setup_phantom_settings() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'homepage-thumb', 300, 300, true );
    add_image_size( 'featured-thumb', 1100, 550, true );
}

add_action('after_setup_theme', 'setup_phantom_settings');

// Register Navigation Menus
function register_phantom_nav() {

    $locations = array(
        'main-menu' => __( 'Main Menu' ),
    );

    register_nav_menus( $locations );

}
add_action( 'init', 'register_phantom_nav' );

// Register Sidebars
function register_contact_widget() {

    $args = array(
        'id'            => 'widget-contact',
        'name'          => __( 'Contact Form' ),
        'description'   => __( 'Add contact form widget at the bottom of each page' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    );
    register_sidebar( $args );

}

add_action( 'widgets_init', 'register_contact_widget' );

function theme_phantom_enqueue_style() {
    wp_enqueue_style( 'theme', get_stylesheet_uri() );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );

    wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', array('jquery'), '3.0.1', true );
    wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', array('jquery'), null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_phantom_enqueue_style' );


require 'customizer.php';